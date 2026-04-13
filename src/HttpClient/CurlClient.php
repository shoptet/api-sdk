<?php

namespace Shoptet\Api\Sdk\Php\HttpClient;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\NetworkException;
use Shoptet\Api\Sdk\Php\Exception\RateLimitExceededException;
use Shoptet\Api\Sdk\Php\Exception\RequestException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;
use Shoptet\Api\Sdk\Php\Sdk;

class CurlClient implements ClientInterface
{
    /**
     * @const int default timeout in seconds. You can change it by calling setTimeout() method.
     */
    private const int DEFAULT_TIMEOUT = 80;

    /**
     * @const int default connect timeout in seconds. You can change it by calling setConnectTimeout() method.
     */
    private const int DEFAULT_CONNECT_TIMEOUT = 30;

    protected const string HEADER_DEPRECATED_ENDPOINT = 'X-Shoptet-Deprecated';
    protected const string HEADER_SUNSET = 'Sunset';

    /**
     * cURL synchronous requests handle.
     */
    protected null|\CurlHandle $handle = null;
    protected int $timeout = self::DEFAULT_TIMEOUT;
    protected int $connectTimeout = self::DEFAULT_CONNECT_TIMEOUT;
    /**
     * @var array<int|string, mixed>
     */
    protected array $customOptions = [];

    /**
     * @const int threshold for throwing an exception when rate limit usage reaches this percentage.
     */
    private const int RATE_LIMITER_PERCENTAGE_EXCEEDED = 100;

    public function __construct(protected ResponseFactoryInterface $responseFactory)
    {
    }

    public function __destruct()
    {
        $this->closeCurlHandle();
    }

    /**
     * @inheritDoc
     *
     * This implementation uses cURL to send the request.
     *
     * @throws InvalidArgumentException
     * @throws NetworkException
     * @throws RequestException
     * @throws RuntimeException
     */
    public function request(Endpoint $endpoint): ResponseInterface
    {
        $handle = \curl_init();

        if ($handle === false) {
            throw new RuntimeException('Failed to initialize cURL');
        }

        $this->handle = $handle;

        $opts = $this->getRequestOpts($endpoint);

        $rHeaders = [];
        $opts[CURLOPT_HEADERFUNCTION] = function (\CurlHandle $curl, string $header_line) use (&$rHeaders) {
            if (str_contains($header_line, ':') === false) {
                return strlen($header_line);
            }

            list($key, $value) = explode(':', trim($header_line), 2);
            $rHeaders[trim($key)] = trim($value);

            return strlen($header_line);
        };

        curl_setopt_array($this->handle, $opts);

        Sdk::getLogger()->debug(
            sprintf(
                '%s: Request %s %s',
                __CLASS__,
                $endpoint->getMethod(),
                $endpoint->getUrl()
            ),
            [
                'headers' => $endpoint->getHeaders(),
                'body' => $endpoint->getBody(),
            ]
        );
        /** @var string|false $rBody */
        $rBody = curl_exec($this->handle);

        $errno = curl_errno($this->handle);
        switch ($errno) {
            case CURLE_OK:
                break;

            case CURLE_COULDNT_RESOLVE_PROXY:
            case CURLE_COULDNT_RESOLVE_HOST:
            case CURLE_COULDNT_CONNECT:
            case CURLE_OPERATION_TIMEOUTED:
            case CURLE_SSL_CONNECT_ERROR:
                throw new NetworkException(curl_error($this->handle));

            default:
                throw new RequestException(curl_error($this->handle));
        }

        if ($rBody === false) {
            throw new RuntimeException('Unknown error');
        }

        $rStatusCode = \curl_getinfo($this->handle, \CURLINFO_HTTP_CODE);
        $this->closeCurlHandle();

        Sdk::getLogger()->debug(
            sprintf(
                '%s: Response %s %s',
                __CLASS__,
                $endpoint->getMethod(),
                $endpoint->getUrl()
            ),
            [
                'headers' => $rHeaders,
                'statusCode' => $rStatusCode,
                'body' => $rBody,
            ]
        );

        $this->checkHeaders($rHeaders, $endpoint);
        $this->checkRateLimiter($rHeaders, $rStatusCode, $endpoint);

        return $this->responseFactory
            ->createResponse()
            ->setHeaders($rHeaders)
            ->setStatusCode($rStatusCode)
            ->setRawBody($rBody)
            ->setEndpoint($endpoint);
    }

    /**
     * Add custom cURL option. Check https://www.php.net/manual/en/function.curl-setopt.php for available options.
     *
     * @param int|string $option
     * @param int|string $value
     *
     * @return ClientInterface
     */
    public function addOption(int|string $option, int|string $value): ClientInterface
    {
        $this->customOptions[$option] = $value;
        return $this;
    }

    public function removeOption(int|string $option): ClientInterface
    {
        if (array_key_exists($option, $this->customOptions)) {
            unset($this->customOptions[$option]);
        }
        return $this;
    }

    public function setResponseFactory(ResponseFactoryInterface $responseFactory): ClientInterface
    {
        $this->responseFactory = $responseFactory;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @inheritDoc
     */
    public function setTimeout(int $timeout): ClientInterface
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    /**
     * @inheritDoc
     */
    public function setConnectTimeout(int $connectTimeout): ClientInterface
    {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * @return array<int|string, mixed>
     * @throws InvalidArgumentException
     */
    protected function getRequestOpts(Endpoint $endpoint): array
    {
        $opts = [];

        switch ($endpoint->getMethod()) {
            case 'get':
                $opts[CURLOPT_HTTPGET] = 1;
                break;

            case 'post':
                $opts[CURLOPT_POST] = 1;
                if ($endpoint->getBody() !== null) {
                    $opts[CURLOPT_POSTFIELDS] = json_encode($endpoint->getBody());
                }
                break;

            case 'put':
                $opts[CURLOPT_PUT] = 1;
                if ($endpoint->getBody() !== null) {
                    $opts[CURLOPT_POSTFIELDS] = json_encode($endpoint->getBody());
                }
                break;

            case 'patch':
                $opts[CURLOPT_CUSTOMREQUEST] = 'PATCH';
                if ($endpoint->getBody() !== null) {
                    $opts[CURLOPT_POSTFIELDS] = json_encode($endpoint->getBody());
                }
                break;

            case 'delete':
                $opts[CURLOPT_CUSTOMREQUEST] = 'DELETE';
                break;

            default:
                throw new InvalidArgumentException(sprintf('Unexpected value method "%s"', $endpoint->getMethod()));
        }

        $opts[CURLOPT_URL] = $endpoint->getUrl();
        $opts[CURLOPT_RETURNTRANSFER] = true;
        $opts[CURLOPT_CONNECTTIMEOUT] = $this->connectTimeout;
        $opts[CURLOPT_TIMEOUT] = $this->timeout;

        $headers = $endpoint->getHeaders();
        array_walk($headers, fn(&$value, $key) => $value = $key . ': ' . $value);
        $opts[CURLOPT_HTTPHEADER] = $headers;

        foreach ($this->customOptions as $option => $value) {
            $opts[$option] = $value;
        }

        return $opts;
    }

    /**
     * @param array<string, string> $headers
     * @param Endpoint $endpoint
     * @return void
     */
    protected function checkHeaders(array $headers, Endpoint $endpoint): void
    {
        if (array_key_exists(self::HEADER_DEPRECATED_ENDPOINT, $headers)) {
            Sdk::getLogger()->notice(
                sprintf(
                    '%s: Endpoint %s %s is marked as deprecated.%s',
                    __CLASS__,
                    $endpoint->getMethod(),
                    $endpoint->getUrl(),
                    array_key_exists(self::HEADER_SUNSET, $headers) ? sprintf(' Sunset date "%s".', $headers[self::HEADER_SUNSET]) : ''
                )
            );
        }
    }

    /**
     * Handles API rate limiting based on response headers.
     *
     * @param array<string, string> $headers
     * @return void
     */
    protected function checkRateLimiter(array $headers, int $statusCode, Endpoint $endpoint): void
    {
        $percentage = $this->calculateRateLimiterPercentage($headers);

        if ($percentage === null) {
            return;
        }

        if ($percentage >= self::RATE_LIMITER_PERCENTAGE_EXCEEDED) {
            $message = sprintf(
                '%s: API rate limit exceeded in %s %s.',
                __CLASS__,
                $endpoint->getMethod(),
                $endpoint->getUrl()
            );

            $retryAfter = $headers['Retry-After'] ?? null;

            if ($retryAfter !== null) {
                $message .= sprintf(' Retry after %s', $headers['Retry-After']);
            }

            if ($statusCode === 429) {
                throw new RateLimitExceededException($message, $retryAfter);
            } else {
                Sdk::getLogger()->debug($message);
            }
        }
    }

    protected function closeCurlHandle(): void
    {
        if ($this->handle !== null) {
            \curl_close($this->handle);
            $this->handle = null;
        }
    }

    /**
     * Extracts and calculates the rate limiter percentage from headers.
     *
     * @param array<string, string> $headers
     * @return float|null
     */
    private function calculateRateLimiterPercentage(array $headers): ?float
    {
        $bucketFilling = $headers['X-RateLimit-Bucket-Filling'] ?? null;

        if ($bucketFilling === null) {
            return null;
        }

        $bucketParts = explode('/', $bucketFilling);

        if (count($bucketParts) !== 2) {
            return null;
        }

        [$current, $max] = array_map('intval', $bucketParts);

        return $max > 0 ? ($current / $max) * 100 : null;
    }

}

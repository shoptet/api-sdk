<?php

namespace Shoptet\Api\Sdk\Php\HttpClient;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\NetworkException;
use Shoptet\Api\Sdk\Php\Exception\RequestException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;
use Shoptet\Api\Sdk\Php\Sdk;

class CurlClient implements ClientInterface
{
    private const int DEFAULT_TIMEOUT = 80;
    private const int DEFAULT_CONNECT_TIMEOUT = 30;

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

    public function __construct(protected ResponseFactoryInterface $responseFactory)
    {
    }

    public function __destruct()
    {
        $this->closeCurlHandle();
    }

    /**
     * @throws InvalidArgumentException
     * @throws NetworkException
     * @throws RequestException
     * @throws RuntimeException
     */
    public function request(Endpoint $endpoint): ResponseInterface
    {
        $this->handle = \curl_init();

        $opts = $this->getRequestOpts($endpoint);

        $rHeaders = [];
        $opts[CURLOPT_HEADERFUNCTION] = function ($curl, $header_line) use (&$rHeaders) {
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
        /** @var false|string $rBody */
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

        //@todo log deprecated header
        //@todo rateLimiter

        return $this->responseFactory
            ->createResponse()
            ->setHeaders($rHeaders)
            ->setStatusCode($rStatusCode)
            ->setRawBody($rBody)
            ->setEndpoint($endpoint);
    }

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
     * @return array<int, mixed>
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

    protected function closeCurlHandle(): void
    {
        if ($this->handle !== null) {
            \curl_close($this->handle);
            $this->handle = null;
        }
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Factory\Endpoint;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Endpoint\EndpointMap;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\HttpClient\ClientInterface;

class EndpointFactory
{
    /**
     * @param array<string, string> $headers
     */
    public function __construct(
        protected string $baseUri,
        protected array $headers,
        protected ClientInterface $httpClient
    ) {
    }

    /**
     * @param class-string $endpoint
     * @throws InvalidArgumentException
     */
    public function createEndpoint(string $endpoint): Endpoint
    {
        if (!class_exists($endpoint)) {
            throw new InvalidArgumentException(sprintf('Endpoint class "%s" does not exist.', $endpoint));
        }
        if (!is_subclass_of($endpoint, Endpoint::class)) {
            throw new InvalidArgumentException(sprintf('Endpoint "%s" must be subclass of the "%s".', $endpoint, Endpoint::class));
        }

        return new $endpoint(
            $this->baseUri,
            $this->headers,
            $this->httpClient
        );
    }

    /**
     * @param string $method
     * @param string $url
     * @return Endpoint
     * @throws InvalidArgumentException
     */
    public function createEndpointByHttpMethodAndUrl(string $method, string $url): Endpoint
    {
        $endpoint = EndpointMap::getEndpoint($method, $url);

        if ($endpoint === null) {
            throw new InvalidArgumentException(sprintf('Endpoint path "%s %s" is not mapped to any endpoint.', strtoupper($method), $url));
        }
        if (!is_subclass_of($endpoint, Endpoint::class)) {
            throw new InvalidArgumentException(sprintf('Endpoint "%s" must be subclass of the "%s".', $endpoint, Endpoint::class));
        }

        return new $endpoint(
            $this->baseUri,
            $this->headers,
            $this->httpClient
        );
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function setBaseUri(string $baseUri): EndpointFactory
    {
        $this->baseUri = $baseUri;
        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array<string, string> $headers
     */
    public function setHeaders(array $headers): EndpointFactory
    {
        $this->headers = $headers;
        return $this;
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function setHttpClient(ClientInterface $httpClient): EndpointFactory
    {
        $this->httpClient = $httpClient;
        return $this;
    }
}

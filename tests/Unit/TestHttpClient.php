<?php

namespace ShoptetTests\Unit;

use Exception;
use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\HttpClient\ClientInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

class TestHttpClient implements ClientInterface
{
    private ResponseFactoryInterface $responseFactory;

    public function __construct(?ResponseInterface $response = null)
    {
        if ($response) {
            $this->responseFactory = new FakeResponseFactory($response);
        }
    }

    public function request(Endpoint $endpoint): ResponseInterface
    {
        return $this->responseFactory->createResponse();
    }

    public function addOption(int|string $option, int|string $value): ClientInterface
    {
        throw new \Exception('Not implemented, for testing purpose only!');
    }

    public function removeOption(int|string $option): ClientInterface
    {
        throw new \Exception('Not implemented, for testing purpose only!');
    }

    public function setResponseFactory(ResponseFactoryInterface $responseFactory): ClientInterface
    {
        $this->responseFactory = $responseFactory;
        return $this;
    }

    public function getTimeout(): int
    {
        return 0;
    }

    /**
     * @throws Exception
     */
    public function setTimeout(int $timeout): ClientInterface
    {
        throw new Exception('Not implemented, for testing purpose only!');
    }

    public function getConnectTimeout(): int
    {
        return 0;
    }

    /**
     * @throws Exception
     */
    public function setConnectTimeout(int $connectTimeout): ClientInterface
    {
        throw new Exception('Not implemented, for testing purpose only!');
    }
}

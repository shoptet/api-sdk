<?php

namespace Shoptet\Api\Sdk\Php\HttpClient;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

interface ClientInterface
{
    /**
     * Executes the request for given endpoint and returns the response.
     *
     * @param Endpoint $endpoint endpoint representation to be requested
     *
     * @return ResponseInterface response from the endpoint in the form of ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     */
    public function request(Endpoint $endpoint): ResponseInterface;

    public function addOption(int|string $option, int|string $value): ClientInterface;

    public function removeOption(int|string $option): ClientInterface;

    public function setResponseFactory(ResponseFactoryInterface $responseFactory): ClientInterface;

    /**
     * @return int timeout in seconds
     */
    public function getTimeout(): int;

    /**
     * @param int $timeout in seconds
     * @return ClientInterface
     */
    public function setTimeout(int $timeout): ClientInterface;

    /**
     * @return int Connection timeout in seconds
     */
    public function getConnectTimeout(): int;

    /**
     * @param int $connectTimeout in seconds
     * @return ClientInterface
     */
    public function setConnectTimeout(int $connectTimeout): ClientInterface;
}

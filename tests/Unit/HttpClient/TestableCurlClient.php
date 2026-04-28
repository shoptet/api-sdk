<?php

namespace ShoptetTests\Unit\HttpClient;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\HttpClient\CurlClient;

class TestableCurlClient extends CurlClient
{
    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        parent::__construct($responseFactory);
    }

    /** @param array<string, string> $headers */
    public function callLogResponse(Endpoint $endpoint, array $headers, int $statusCode, string $body): void
    {
        $this->logResponse($endpoint, $headers, $statusCode, $body);
    }
}

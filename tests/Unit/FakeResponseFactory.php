<?php

namespace ShoptetTests\Unit;

use Shoptet\Api\Sdk\Php\Factory\Response\ResponseFactoryInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

class FakeResponseFactory implements ResponseFactoryInterface
{
    public function __construct(
        private readonly ResponseInterface $response
    ) {
    }

    public function createResponse(): ResponseInterface
    {
        return $this->response;
    }
}

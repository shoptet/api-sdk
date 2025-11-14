<?php

namespace Shoptet\Api\Sdk\Php\Factory\Response;

use Shoptet\Api\Sdk\Php\Response\EntityResponse;

class EntityResponseFactory implements ResponseFactoryInterface
{
    public function createResponse(): EntityResponse
    {
        return new EntityResponse();
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Factory\Response;

use Shoptet\Api\Sdk\Php\Response\ArrayResponse;

class ArrayResponseFactory implements ResponseFactoryInterface
{
    public function createResponse(): ArrayResponse
    {
        return new ArrayResponse();
    }
}

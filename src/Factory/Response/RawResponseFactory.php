<?php

namespace Shoptet\Api\Sdk\Php\Factory\Response;

use Shoptet\Api\Sdk\Php\Response\RawResponse;

class RawResponseFactory implements ResponseFactoryInterface
{
    public function createResponse(): RawResponse
    {
        return new RawResponse();
    }
}

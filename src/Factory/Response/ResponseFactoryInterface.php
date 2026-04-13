<?php

namespace Shoptet\Api\Sdk\Php\Factory\Response;

use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

interface ResponseFactoryInterface
{
    /**
     * Create response object from raw (text) response data
     *
     * @return ResponseInterface
     */
    public function createResponse(): ResponseInterface;
}

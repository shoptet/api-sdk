<?php

namespace Shoptet\Api\Sdk\Php\Factory\Response;

use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

interface ResponseFactoryInterface
{
    public function createResponse(): ResponseInterface;
}

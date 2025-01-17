<?php

namespace Shoptet\Api\Sdk\Php\Response;

/**
 * Represents raw (text) response from API
 */
class RawResponse extends AbstractResponse
{
    public function getBody(): string
    {
        return $this->rawBody;
    }
}

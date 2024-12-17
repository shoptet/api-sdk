<?php

namespace Shoptet\Api\Sdk\Php\Response;

class RawResponse extends AbstractResponse
{
    public function getBody(): string
    {
        return $this->rawBody;
    }
}

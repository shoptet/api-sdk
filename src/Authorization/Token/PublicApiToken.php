<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

/**
 * Token for public API.
 * For more information see https://developers.shoptet.com/api/documentation/getting-api-access-token/
 */
class PublicApiToken extends Token
{
    private const string HEADER_NAME = 'Shoptet-Access-Token';

    /**
     * @inheritDoc
     */
    public function getHeaderName(): string
    {
        return self::HEADER_NAME;
    }
}

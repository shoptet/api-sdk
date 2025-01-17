<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

/**
 * Token implementation for private API token.
 * See https://developers.shoptet.com/home/premium/private-api/ for more information.
 */
class PrivateApiToken extends Token
{
    private const string HEADER_NAME = 'Shoptet-Private-Api-Token';

    /**
     * @inheritDoc
     */
    public function getHeaderName(): string
    {
        return self::HEADER_NAME;
    }

    /**
     * @inheritDoc
     *
     * @return false private api token never expires
     */
    public function isExpired(): bool
    {
        return false;
    }
}

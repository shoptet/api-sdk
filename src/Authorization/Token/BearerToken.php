<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

/**
 * Implementation of Token abstract class for Bearer token
 */
class BearerToken extends Token
{
    private const string HEADER_NAME = 'Authorization';

    /**
     * @inheritDoc
     *
     * @return string returns access token with Bearer prefix for header value
     */
    public function getAccessToken(): string
    {
        return sprintf('Bearer %s', parent::getAccessToken());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderName(): string
    {
        return self::HEADER_NAME;
    }
}

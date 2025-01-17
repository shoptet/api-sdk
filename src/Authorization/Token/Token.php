<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

use DateTime;

/**
 * Abstract class for token representation of various types of tokens
 * used in authorization process.
 */
abstract class Token
{
    /**
     * Token constructor.
     *
     * @param string $tokenId system unique token identifier
     * @param string $accessToken access token value
     * @param DateTime|null $expireAt expiration date of token, null represents token without expiration
     */
    public function __construct(
        private readonly string $tokenId,
        private readonly string $accessToken,
        private readonly ?DateTime $expireAt = null,
    ) {
    }

    /**
     * returns header name for token usage in request
     *
     * @return string header name for token used in request
     */
    abstract public function getHeaderName(): string;

    /**
     * @return string system unique token identifier
     */
    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    /**
     * returns access token value for request header usage
     *
     * @return string access token value
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * returns expiration date of token if set
     *
     * @return DateTime|null expiration date of token
     */
    public function getExpireAt(): ?DateTime
    {
        return $this->expireAt;
    }

    /**
     * checks if token is expired, if null, token is considered as not expired
     *
     * @return bool true if token is expired, false otherwise
     */
    public function isExpired(): bool
    {
        if ($this->expireAt === null) {
            return false;
        }

        return $this->expireAt < new DateTime();
    }
}

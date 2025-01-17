<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

use Shoptet\Api\Sdk\Php\Authorization\TokenNotFoundException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;

/**
 * Token storage interface.
 * Implement this interface to store and load tokens in authorization process.
 */
interface TokenStorage
{
    /**
     * Store the given session object.
     * if token storage fails, throw RuntimeException.
     *
     * @throws RuntimeException
     */
    public function storeToken(Token $token): void;

    /**
     * handle loading the given token.
     * if token not found, throw TokenNotFoundException.
     *
     * @param string $tokenId system unique token identifier.
     *
     * @return Token loaded token. Instance of Token interface.
     *
     * @throws TokenNotFoundException
     */
    public function loadToken(string $tokenId): Token;
}

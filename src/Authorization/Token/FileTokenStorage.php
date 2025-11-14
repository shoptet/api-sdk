<?php

namespace Shoptet\Api\Sdk\Php\Authorization\Token;

use Shoptet\Api\Sdk\Php\Authorization\TokenNotFoundException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;

/**
 * Basic token storage implementation using files. Not recommended for production use.
 * We recommend using i.e. database or other more reliable storage.
 */
class FileTokenStorage implements TokenStorage
{
    private readonly string $path;

    /**
     * FileTokenStorage constructor.
     *
     * @param string $path path to directory where tokens will be stored
     */
    public function __construct(string $path)
    {
        if (!is_dir($path)) {
            mkdir($path);
        }

        $this->path = $path;
    }

    /**
     * @throws RuntimeException
     * @throws TokenNotFoundException
     * @throws RuntimeException
     */
    public function loadToken(string $tokenId): Token
    {
        $path = $this->getPath($tokenId);

        if (!file_exists($path)) {
            throw new TokenNotFoundException(sprintf('Token with ID "%s" not found!', $tokenId));
        }

        $token = unserialize(file_get_contents($path) ?: '');

        if ($token instanceof Token) {
            return $token;
        }

        throw new RuntimeException('Token initialization failed!');
    }

    public function storeToken(Token $token): void
    {
        $path = $this->getPath($token->getTokenId());
        $result = file_put_contents($path, serialize($token)) > 0;

        if ($result === false) {
            throw new RuntimeException('Token storage failed!');
        }
    }

    private function getPath(string $tokenId): string
    {
        return "{$this->path}/{$tokenId}";
    }
}

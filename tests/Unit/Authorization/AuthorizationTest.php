<?php

namespace ShoptetTests\Unit\Authorization;

use DateTime;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Authorization\AuthorizationFacade;
use Shoptet\Api\Sdk\Php\Authorization\OAuth;
use Shoptet\Api\Sdk\Php\Authorization\TokenHasExpiredException;
use Shoptet\Api\Sdk\Php\Authorization\TokenNotFoundException;
use Shoptet\Api\Sdk\Php\Authorization\Token\BearerToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\PrivateApiToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\PublicApiToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\Token;
use Shoptet\Api\Sdk\Php\Authorization\Token\TokenStorage;
use Shoptet\Api\Sdk\Php\Authorization\UnauthorizedException;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Sdk;

class AuthorizationTest extends TestCase
{
    private const string EXPIRED_ACCESS_TOKEN_ID = 'expiredAccessTokenId';
    private const string VALID_ACCESS_TOKEN_ID = 'validAccessTokenId';
    private const string PRIVATE_TOKEN_ID = 'validPrivateTokenId';

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testExpiredAccessTokenAuthorization(): void
    {
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->with(self::EXPIRED_ACCESS_TOKEN_ID)
            ->willReturn($this->createAccessToken(true));

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);

        $this->expectException(TokenHasExpiredException::class);
        $authorizationFacade->authorizeRequest(self::EXPIRED_ACCESS_TOKEN_ID);
    }

    /**
     * @throws \Exception
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testPublicTokenAuthorization(): void
    {
        $token = $this->createAccessToken(false);
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->with(self::VALID_ACCESS_TOKEN_ID)
            ->willReturn($token);

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);

        $authorizationFacade->authorizeRequest(self::VALID_ACCESS_TOKEN_ID);

        $this->checkIsAuthorized($token);
    }

    /**
     * @throws \Exception
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testPrivateTokenAuthorization(): void
    {
        $token = $this->createPrivateToken();
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->with(self::PRIVATE_TOKEN_ID)
            ->willReturn($token);

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);

        $authorizationFacade->authorizeRequest(self::PRIVATE_TOKEN_ID);

        $this->checkIsAuthorized($token);
    }

    public function testOAuthAccessTokenNotExists(): void
    {
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->willThrowException(new TokenNotFoundException());

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);

        $this->expectException(UnauthorizedException::class);
        $authorizationFacade->createFreshPublicApiToken('non-exist-token-id', 'oAuthAccessTokenId');
    }

    public function testOAuthAccessTokenNotBearer(): void
    {
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->willReturn(new PrivateApiToken('privateTokenId', 'privateToken'));

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);

        $this->expectException(LogicException::class);
        $authorizationFacade->createFreshPublicApiToken('non-exist-token-id', 'privateTokenId');
    }

    public function testOAuthAccessTokenSuccess(): void
    {
        $tokenStorage = $this->createMock(TokenStorage::class);
        $tokenStorage->method('loadToken')
            ->willReturn(new BearerToken('privateTokenId', 'oAuthAccessTokenId'));

        $authorizationFacade = $this->createAuthorizationFacade($tokenStorage);
        $authorizationFacade->createFreshPublicApiToken('privateTokenId', 'oAuthAccessTokenId');

        // no exception is thrown
        $this->assertTrue(true);
    }

    /**
     * @throws Exception
     */
    private function createAuthorizationFacade(TokenStorage $tokenStorage): AuthorizationFacade
    {
        $oAuth = $this->createMock(OAuth::class);

        return new AuthorizationFacade($tokenStorage, $oAuth);
    }

    /**
     * @throws \Exception
     */
    private function createAccessToken(bool $expired): PublicApiToken
    {
        $tokenId = $expired ? self::EXPIRED_ACCESS_TOKEN_ID : self::VALID_ACCESS_TOKEN_ID;

        return new PublicApiToken(
            $tokenId,
            sha1($tokenId),
            new DateTime($expired ? 'yesterday' : 'tomorrow'),
        );
    }

    /**
     * @throws \Exception
     */
    private function createPrivateToken(): PrivateApiToken
    {
        return new PrivateApiToken(
            self::PRIVATE_TOKEN_ID,
            sha1(self::PRIVATE_TOKEN_ID)
        );
    }

    private function checkIsAuthorized(Token $token): void
    {
        $headers = Sdk::getHeaders();

        $expectedHeader = $token->getHeaderName();

        $this->assertArrayHasKey($expectedHeader, $headers);
        $this->assertSame($headers[$expectedHeader], $token->getAccessToken());
    }
}

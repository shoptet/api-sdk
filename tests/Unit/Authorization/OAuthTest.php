<?php

namespace ShoptetTests\Unit\Authorization;

use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Authorization\MaximumTokenReachedException;
use Shoptet\Api\Sdk\Php\Authorization\OAuth;
use Shoptet\Api\Sdk\Php\Authorization\ObtainAccessTokenFailedException;
use Shoptet\Api\Sdk\Php\Authorization\Token\BearerToken;
use Shoptet\Api\Sdk\Php\Authorization\Token\PublicApiToken;
use Shoptet\Api\Sdk\Php\Authorization\UnauthorizedException;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\GetAccessToken;
use Shoptet\Api\Sdk\Php\Response\EntityResponse;
use Shoptet\Api\Sdk\Php\Response\RawResponse;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;
use ShoptetTests\Unit\TestHttpClient;

class OAuthTest extends TestCase
{
    public function testRequestData(): void
    {
        $requestData = $this->createOAuthAccessTokenRequestData();

        $this->assertEquals('test-client-id', $requestData->getClientId());
        $this->assertEquals('test-client-secret', $requestData->getClientSecret());
        $this->assertEquals('test-code', $requestData->getCode());
        $this->assertEquals('test-redirect-uri', $requestData->getRedirectUri());
    }

    public function testCreateOAuthAccessTokenNotSuccess(): void
    {
        $response = new RawResponse();
        $response->setStatusCode(404);
        $response->setRawBody('{"error": "Not found"}');

        $this->expectException(ObtainAccessTokenFailedException::class);
        $this->callAccessTokenRequest($response);
    }

    public function testCreateOAuthAccessTokenEmptyBody(): void
    {
        $response = new RawResponse();
        $response->setStatusCode(200);
        $response->setRawBody('');

        $this->expectException(ObtainAccessTokenFailedException::class);
        $this->callAccessTokenRequest($response);
    }

    public function testCreateOAuthAccessToken(): void
    {
        $response = new EntityResponse();
        $response->setEndpoint(new CreateOauthAccessToken('', [], new TestHttpClient()));
        $response->setStatusCode(200);
        $response->setRawBody('{"access_token": "test-access-token"}');

        $token = $this->callAccessTokenRequest($response);

        $this->assertEquals('Bearer test-access-token', $token->getAccessToken());
        $this->assertEquals('oauth-access-token', $token->getTokenId());
    }

    public function testGetPublicApiTokenUnauthorized(): void
    {
        $response = new RawResponse();
        $response->setStatusCode(401);
        $response->setRawBody('{"error": "Unauthorized"}');

        $this->expectException(UnauthorizedException::class);
        $this->callPublicAccessTokenRequest($response);
    }

    public function testGetPublicApiTokenNotSuccess(): void
    {
        $response = new EntityResponse();
        $response->setEndpoint(new GetAccessToken('', [], new TestHttpClient()));
        $response->setStatusCode(400);
        $response->setRawBody('{"error": "Unexpected error"}');

        $this->expectException(ObtainAccessTokenFailedException::class);
        $this->callPublicAccessTokenRequest($response);
    }

    public function testGetPublicApiTokenMaximumTokenReached(): void
    {
        $response = new EntityResponse();
        $response->setEndpoint(new GetAccessToken('', [], new TestHttpClient()));
        $response->setStatusCode(429);
        $response->setRawBody('{"error": "maximum_tokens_reached"}');

        $this->expectException(MaximumTokenReachedException::class);
        $this->callPublicAccessTokenRequest($response);
    }

    public function testGetPublicApiToken(): void
    {
        $response = new EntityResponse();
        $response->setEndpoint(new GetAccessToken('', [], new TestHttpClient()));
        $response->setStatusCode(200);
        $response->setRawBody('{"access_token": "public-access-token", "expires_in": 3600}');

        $token = $this->callPublicAccessTokenRequest($response);

        $this->assertEquals('public-access-token', $token->getAccessToken());
        $this->assertFalse($token->isExpired());
    }

    private function callPublicAccessTokenRequest(ResponseInterface $response): PublicApiToken
    {
        $oAuthAccessToken = new BearerToken('test-access-token', 'oauth-access-token');
        $oAuth = $this->createOAuth($response);

        return $oAuth->getPublicAccessToken('test-token-id', $oAuthAccessToken);
    }

    private function callAccessTokenRequest(ResponseInterface $response): BearerToken
    {
        $oAuth = $this->createOAuth($response);
        $requestData = $this->createOAuthAccessTokenRequestData();

        return $oAuth->getOauthAccessToken('oauth-access-token', $requestData);
    }

    private function createOAuth(ResponseInterface $response): OAuth
    {
        return new OAuth(new TestHttpClient($response), 'https://example.com');
    }

    private function createOAuthAccessTokenRequestData(): CreateOauthAccessTokenRequestData
    {
        return new CreateOauthAccessTokenRequestData([
            'client_id' => 'test-client-id',
            'client_secret' => 'test-client-secret',
            'code' => 'test-code',
            'redirect_uri' => 'test-redirect-uri',
        ]);
    }
}

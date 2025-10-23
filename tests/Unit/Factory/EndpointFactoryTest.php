<?php

namespace ShoptetTests\Unit\Factory;

use PHPUnit\Framework\TestCase;
use ShoptetTests\Unit\Helper\DummyValueObject;
use ShoptetTests\Unit\TestHttpClient;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Factory\Endpoint\EndpointFactory;

class EndpointFactoryTest extends TestCase
{
    public function testCreateNonExistingEndpointClass(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $this->expectException(InvalidArgumentException::class);
        // @phpstan-ignore-next-line
        $endpointFactory->createEndpoint('invalid-endpoint');
    }

    public function testCreateNonExistingEndpoint(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $this->expectException(InvalidArgumentException::class);
        $endpointFactory->createEndpoint(DummyValueObject::class);
    }

    public function testCreateEndpoint(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $endpoint = $endpointFactory->createEndpoint(CreateOauthAccessToken::class);

        $this->assertEquals(['X-Header' => 'X-Value'], $endpoint->getHeaders());
        $this->assertEquals('https://api.example.com/action/ApiOAuthServer/token', $endpoint->getUrl());
    }

    public function testCreateNonExistingEndpointClassByMethodAndUrl(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $this->expectException(InvalidArgumentException::class);
        $endpointFactory->createEndpointByHttpMethodAndUrl('invalid-method', 'invalid-url');
    }

    public function testCreateEndpointsByMethodAndUrlInvalidMethod(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $this->expectException(InvalidArgumentException::class);
        $endpointFactory->createEndpointByHttpMethodAndUrl('POST', '/api/eshop');
    }

    public function testCreateEndpointsByMethodAndUrl(): void
    {
        $endpointFactory = $this->createEndpointFactory();

        $endpoint = $endpointFactory->createEndpointByHttpMethodAndUrl('GET', '/api/eshop');

        $this->assertEquals(['X-Header' => 'X-Value'], $endpoint->getHeaders());
        $this->assertEquals('https://api.example.com/api/eshop', $endpoint->getUrl());
    }

    private function createEndpointFactory(): EndpointFactory
    {
        return new EndpointFactory(
            'https://api.example.com',
            ['X-Header' => 'X-Value'],
            new TestHttpClient()
        );
    }
}

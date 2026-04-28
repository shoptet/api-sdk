<?php

namespace ShoptetTests\Unit\HttpClient;

use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;
use Shoptet\Api\Sdk\Php\Sdk;
use ShoptetTests\Unit\FakeResponseFactory;

class CurlClientTest extends TestCase
{
    protected function setUp(): void
    {
        Sdk::setLogger(new \Psr\Log\NullLogger());
    }

    public function testResponseLogIncludesRequestIdFromHeader(): void
    {
        $logger = new TestLogger();
        Sdk::setLogger($logger);

        $client = $this->createTestableClient();
        $endpoint = $this->createEndpointStub('get', 'https://api.example.com/api/eshop');

        $client->callLogResponse(
            $endpoint,
            ['X-Request-ID' => '019c8c34-64f3-7328-af43-bf1e34fa39d7', 'Content-Type' => 'application/json'],
            200,
            '{"data":null}'
        );

        $this->assertCount(1, $logger->records);
        $this->assertSame('019c8c34-64f3-7328-af43-bf1e34fa39d7', $logger->records[0]['context']['requestId']);
    }

    public function testResponseLogHasNullRequestIdWhenHeaderMissing(): void
    {
        $logger = new TestLogger();
        Sdk::setLogger($logger);

        $client = $this->createTestableClient();
        $endpoint = $this->createEndpointStub('get', 'https://api.example.com/api/eshop');

        $client->callLogResponse($endpoint, ['Content-Type' => 'application/json'], 200, '{"data":null}');

        $this->assertCount(1, $logger->records);
        $this->assertNull($logger->records[0]['context']['requestId']);
    }

    public function testResponseLogIncludesStatusCodeAndBody(): void
    {
        $logger = new TestLogger();
        Sdk::setLogger($logger);

        $client = $this->createTestableClient();
        $endpoint = $this->createEndpointStub('post', 'https://api.example.com/api/products');

        $client->callLogResponse($endpoint, ['X-Request-ID' => 'abc-123'], 201, '{"data":{"guid":"xyz"}}');

        $this->assertCount(1, $logger->records);
        $context = $logger->records[0]['context'];
        $this->assertSame(201, $context['statusCode']);
        $this->assertSame('{"data":{"guid":"xyz"}}', $context['body']);
        $this->assertSame('abc-123', $context['requestId']);
    }

    private function createTestableClient(): TestableCurlClient
    {
        $response = $this->createMock(ResponseInterface::class);
        return new TestableCurlClient(new FakeResponseFactory($response));
    }

    private function createEndpointStub(string $method, string $url): Endpoint
    {
        $endpoint = $this->createMock(Endpoint::class);
        $endpoint->method('getMethod')->willReturn($method);
        $endpoint->method('getUrl')->willReturn($url);
        return $endpoint;
    }
}

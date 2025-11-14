<?php

namespace Shoptet\Api\Sdk\Php\Response;

use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;

interface ResponseInterface
{
    /**
     * @return array<string, string>
     */
    public function getHeaders(): array;

    /**
     * @param array<string, string> $headers
     * @return $this
     */
    public function setHeaders(array $headers): static;

    public function getStatusCode(): int;

    public function setStatusCode(int $statusCode): static;

    public function getRawBody(): string;

    public function getBody(): mixed;

    public function setRawBody(string $body): static;

    public function isSuccess(): bool;

    public function isClientError(): bool;

    public function isServerError(): bool;

    public function getEndpoint(): Endpoint;

    public function setEndpoint(Endpoint $endpoint): static;

    public function getNextPage(): ResponseInterface;
}

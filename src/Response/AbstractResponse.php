<?php

namespace Shoptet\Api\Sdk\Php\Response;

use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Endpoint\Endpoint;
use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Exception\BadMethodCallException;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\OutOfRangeException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @var array<string, string>
     */
    protected array $headers;
    protected int $statusCode;
    protected string $rawBody;
    protected Endpoint $endpoint;

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array<string, string> $headers
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): static
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getRawBody(): string
    {
        return $this->rawBody;
    }

    public function setRawBody(string $body): static
    {
        $this->rawBody = $body;
        return $this;
    }

    public function isSuccess(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }

    public function isClientError(): bool
    {
        return $this->statusCode >= 400 && $this->statusCode < 500;
    }

    public function isServerError(): bool
    {
        return $this->statusCode >= 500 && $this->statusCode < 600;
    }

    public function getEndpoint(): Endpoint
    {
        return $this->endpoint;
    }

    public function setEndpoint(Endpoint $endpoint): static
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @throws BadMethodCallException
     * @throws LogicException
     * @throws OutOfRangeException
     * @throws RuntimeException
     */
    public function getNextPage(): ResponseInterface
    {
        if (!$this->endpoint instanceof PageableGet) {
            throw new BadMethodCallException(
                sprintf(
                    'Trying to access next page of not pageable endpoint "%s"',
                    get_class($this->endpoint)
                )
            );
        }
        $endpoint = clone $this->endpoint;
        $endpoint->setPaginator($this->getPaginator());
        return $endpoint->getNextPage();
    }

    /**
     * @throws RuntimeException
     */
    protected function getPaginator(): Paginator
    {
        if (!$this->isSuccess()) {
            throw new RuntimeException('Paginator is not processable. Response was not successful.');
        }

        /**
         * @var array{
         *    data?: array{
         *      paginator?: array<string, mixed>
         *    }
         *  }|null $body
         */
        $body = json_decode($this->rawBody, true);
        if ($body === null || !isset($body['data']['paginator'])) {
            throw new RuntimeException('Paginator is not processable');
        }
        return new Paginator($body['data']['paginator']);
    }
}

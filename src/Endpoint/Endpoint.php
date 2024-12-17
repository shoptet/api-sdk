<?php

namespace Shoptet\Api\Sdk\Php\Endpoint;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\ValueObjectInterface;
use Shoptet\Api\Sdk\Php\Exception\EndpointValidationException;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Entity\EntityFactory;
use Shoptet\Api\Sdk\Php\Helper\StringConverter;
use Shoptet\Api\Sdk\Php\HttpClient\ClientInterface;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

abstract class Endpoint
{
    /**
     * @var array<string, string>
     */
    protected array $queryParams = [];
    /**
     * @var array<string, string>
     */
    protected array $pathParams = [];
    /**
     * @var array<string, bool>
     */
    protected array $supportedPathParams = [];
    /**
     * @var array<string, bool>
     */
    protected array $supportedQueryParams = [];
    protected string $method;
    protected ?Entity $body = null;

    /**
     * @param array<string, string> $headers
     */
    public function __construct(protected readonly string $baseUri, protected readonly array $headers, protected readonly ClientInterface $httpClient)
    {
    }

    /**
     * @return class-string<Entity>|null
     */
    abstract public function getRequestEntityClass(): ?string;

    /**
     * @return class-string<Entity>|null
     */
    abstract public function getResponseEntityClass(): ?string;

    /**
     * @throws LogicException
     * @throws RuntimeException
     */
    public function execute(): ResponseInterface
    {
        try {
            $this->validate();
        } catch (EndpointValidationException $e) {
            throw new RuntimeException(
                'Entity is not ready for execution',
                $e->getCode(),
                $e
            );
        }

        return $this->httpClient->request($this);
    }

    /**
     * @param array<int|string, string>|string|int|float|bool|ValueObjectInterface $paramValue
     * @throws InvalidArgumentException
     */
    public function addQueryParam(string $paramName, array|string|int|float|bool|ValueObjectInterface $paramValue): static
    {
        $this->queryParams[$paramName] = StringConverter::convertParam($paramValue);
        return $this;
    }

    /**
     * @param array<string, string|int|float|bool|ValueObjectInterface> $params
     * @throws InvalidArgumentException
     */
    public function setQueryParams(array $params): static
    {
        $this->queryParams = array_map(fn($param) => StringConverter::convertParam($param), $params);
        return $this;
    }

    public function addPathParam(string $paramName, string $paramValue): static
    {
        $this->pathParams[$paramName] = $paramValue;
        return $this;
    }

    public function getBody(): ?Entity
    {
        return $this->body;
    }

    /**
     * @param array<string, mixed>|Entity|null $body
     * @return $this
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public function setBody(null|array|Entity $body): static
    {
        if ($this->getRequestEntityClass() === null) {
            throw new InvalidArgumentException('Trying to set body in body-less Entity.');
        }

        if (is_array($body)) {
            $body = EntityFactory::createEntity($this->getRequestEntityClass(), $body);
        }

        $this->body = $body;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getUrl(): string
    {
        $endpoint = $this->getEndpoint();
        foreach ($this->pathParams as $paramName => $paramValue) {
            $endpoint = str_replace(
                '{' . $paramName . '}',
                $paramValue,
                $endpoint
            );
        }

        $query = '';
        if (count($this->queryParams) > 0) {
            $query = '?' . http_build_query($this->queryParams);
        }

        return $this->baseUri . $endpoint . $query;
    }

    /**
     * @return void
     * @throws EndpointValidationException
     */
    public function validate(): void
    {
        $unsupportedPathParams = array_filter(
            $this->pathParams,
            fn($param) => !array_key_exists($param, $this->supportedPathParams),
            ARRAY_FILTER_USE_KEY
        );
        if (count($unsupportedPathParams) > 0) {
            throw new EndpointValidationException(
                sprintf(
                    'Unsupported path params defined. "%s"',
                    implode(
                        ', ',
                        array_keys($unsupportedPathParams)
                    )
                )
            );
        }

        $unsupportedQueryParams = array_filter(
            $this->queryParams,
            fn($param) => !array_key_exists($param, $this->supportedQueryParams),
            ARRAY_FILTER_USE_KEY
        );
        if (count($unsupportedQueryParams) > 0) {
            throw new EndpointValidationException(
                sprintf(
                    'Unsupported query params defined. "%s"',
                    implode(
                        ', ',
                        array_keys($unsupportedQueryParams)
                    )
                )
            );
        }

        $notPresentRequiredPathParams = array_filter(
            $this->supportedPathParams,
            fn($required, $param) => $required === true && !array_key_exists($param, $this->pathParams),
            ARRAY_FILTER_USE_BOTH
        );
        if (count($notPresentRequiredPathParams) > 0) {
            throw new EndpointValidationException(
                sprintf(
                    'Undefined required path param/s "%s"',
                    implode(
                        ', ',
                        array_keys($notPresentRequiredPathParams)
                    )
                )
            );
        }

        $notPresentRequiredQueryParams = array_filter(
            $this->supportedQueryParams,
            fn($required, $param) => $required === true && !array_key_exists($param, $this->queryParams),
            ARRAY_FILTER_USE_BOTH
        );
        if (count($notPresentRequiredQueryParams) > 0) {
            throw new EndpointValidationException(
                sprintf(
                    'Undefined required query param/s "%s"',
                    implode(
                        ', ',
                        array_keys($notPresentRequiredQueryParams)
                    )
                )
            );
        }
    }

    abstract protected function getEndpoint(): string;
}

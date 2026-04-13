<?php

namespace Shoptet\Api\Sdk\Php\Response;

/**
 * Converts raw response from API to array
 */
class ArrayResponse extends AbstractResponse
{
    /**
     * @var array<string, mixed>|null
     */
    protected ?array $body;

    /**
     * Convert and returns raw response body as array
     *
     * @return array<string, mixed>|null
     */
    public function getBody(): ?array
    {
        if ($this->isServerError()) {
            return null;
        }
        if (!isset($this->body)) {
            /** @var array<string, mixed>|null $body */
            $body = json_decode($this->rawBody, true);
            $this->body = $body;
        }
        return $this->body;
    }
}

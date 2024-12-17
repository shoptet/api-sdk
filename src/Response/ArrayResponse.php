<?php

namespace Shoptet\Api\Sdk\Php\Response;

class ArrayResponse extends AbstractResponse
{
    /**
     * @var array<string, mixed>|null
     */
    protected ?array $body;

    /**
     * @return array<string, mixed>|null
     */
    public function getBody(): ?array
    {
        if ($this->isServerError()) {
            return null;
        }
        if (!isset($this->body)) {
            /** @var null|array<string, mixed> $body */
            $body = json_decode($this->rawBody, true);
            $this->body = $body;
        }
        return $this->body;
    }
}

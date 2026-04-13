<?php

namespace Shoptet\Api\Sdk\Php\Component\ValueObject;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable
{
    public function __toString(): string;
}

<?php

namespace ShoptetTests\Unit\Helper;

use Shoptet\Api\Sdk\Php\Component\ValueObject\ValueObjectInterface;

final class DummyValueObject implements ValueObjectInterface
{
    public function __toString(): string
    {
        return 'dummy-value-object';
    }
}

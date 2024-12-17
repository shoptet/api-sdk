<?php

namespace Shoptet\Api\Sdk\Php\Helper;

use Shoptet\Api\Sdk\Php\Component\ValueObject\ValueObjectInterface;

class StringConverter
{
    /**
     * @param array<string|int, string>|string|int|float|bool|ValueObjectInterface $value
     * @return string
     */
    public static function convertParam(array|string|int|float|bool|ValueObjectInterface $value): string
    {
        if (is_string($value)) {
            return $value;
        }
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }
        if (is_array($value)) {
            return implode(',', $value);
        }
        /** @var int|float|ValueObjectInterface $value */
        return (string) $value;
    }
}

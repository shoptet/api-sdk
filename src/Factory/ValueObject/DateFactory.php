<?php

namespace Shoptet\Api\Sdk\Php\Factory\ValueObject;

use DateTimeImmutable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

final class DateFactory
{
    public const string TYPE_DATE_FORMAT = 'Y-m-d';
    public const string TYPE_DATE_TIME_FORMAT = DATE_ATOM;

    public static function createTypeDate(DateTimeImmutable $dateTime): TypeDate
    {
        return new TypeDate($dateTime->format(self::TYPE_DATE_FORMAT));
    }

    public static function createTypeDateTime(DateTimeImmutable $dateTime): TypeDateTime
    {
        return new TypeDateTime($dateTime->format(self::TYPE_DATE_TIME_FORMAT));
    }
}

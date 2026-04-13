<?php

namespace ShoptetTests\Unit\Helper;

use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Helper\StringConverter;

class StringConverterTest extends TestCase
{
    public function testConvertParam(): void
    {
        $this->assertEquals('string', StringConverter::convertParam('string'));
        $this->assertEquals('true', StringConverter::convertParam(true));
        $this->assertEquals('false', StringConverter::convertParam(false));
        $this->assertEquals('1', StringConverter::convertParam(1));
        $this->assertEquals('1.1', StringConverter::convertParam(1.1));
        $this->assertEquals('1,2,3', StringConverter::convertParam(['1', '2', '3']));
        $this->assertEquals('dummy-value-object', StringConverter::convertParam(new DummyValueObject()));
    }
}

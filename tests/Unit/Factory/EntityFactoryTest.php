<?php

namespace ShoptetTests\Unit\Factory;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenResponse;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Factory\Entity\EntityFactory;

class EntityFactoryTest extends TestCase
{
    public function testCreateEntityNotExisted(): void
    {
        $this->expectException(ReflectionException::class);
        // @phpstan-ignore-next-line
        EntityFactory::createEntity('test', ['test' => 'test']);
    }

    public function testCreateEntityNotExistedParameter(): void
    {
        $entity = EntityFactory::createEntity(CreateOauthAccessTokenResponse::class, ['test' => 'test']);
        // @phpstan-ignore-next-line
        $this->assertSame('test', $entity->test);
    }

    /**
     * @param array<string, mixed> $data
     * @param array<string, mixed> $expected
     *
     * @throws ReflectionException
     */
    #[DataProvider('provideValidDataToCreateEntity')]
    public function testCreateDummyEntity(array $data, array $expected): void
    {
        $entity = EntityFactory::createEntity(DummyEntity::class, $data);

        foreach ($expected as $getter => $value) {
            $getterValue = $entity->{$getter}();
            if (is_object($getterValue)) {
                // @phpstan-ignore-next-line
                $this->assertInstanceOf($value, $getterValue);
                continue;
            }
            $this->assertSame($value, $getterValue);
        }
    }

    /**
     * @return array<string, array{array<string, mixed>, array<string, mixed>}>
     */
    public static function provideValidDataToCreateEntity(): array
    {
        return [
            'set1' => [
                [
                    'string' => 'test',
                    'int' => '1',
                    'nullableString' => null,
                    'subEntity' => [],
                ],
                [
                    'getString' => 'test',
                    'getInt' => 1,
                    'getNullableString' => null,
                    'getSubEntity' =>  DummySubEntity::class,
                ],
            ],
            'set2' => [
                [
                    'string' => '1',
                    'int' => 1,
                    'nullableString' => 'nullableString',
                    'subEntity' => [],
                ],
                [
                    'getString' => '1',
                    'getInt' => 1,
                    'getNullableString' => 'nullableString',
                    'getSubEntity' => DummySubEntity::class
                ],
            ],
        ];
    }
}

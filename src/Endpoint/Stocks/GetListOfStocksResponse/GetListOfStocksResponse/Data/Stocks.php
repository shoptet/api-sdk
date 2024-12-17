<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocksResponse\GetListOfStocksResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\Stock;

/**
 * @extends EntityCollection<Stock>
 * @property Stock[] $data
 * @method Stock[] toArray()
 * @method void set(int $key, Stock $item)
 * @method null|Stock get(int $key)
 * @method void add(Stock $item)
 * @method null|Stock remove(int $key)
 * @method bool removeItem(Stock $item, bool $strict = true)
 * @method bool contains(Stock $item, bool $strict = true)
 * @method null|Stock offsetGet(int $offset)
 * @method void offsetSet(int $offset, Stock $value)
 */
class Stocks extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Stock>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Stock';
    }
}

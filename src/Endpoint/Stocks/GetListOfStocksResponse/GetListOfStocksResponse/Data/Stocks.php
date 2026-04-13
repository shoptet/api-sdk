<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocksResponse\GetListOfStocksResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\StockList;

/**
 * @extends EntityCollection<StockList>
 * @property StockList[] $data
 * @method StockList[] toArray()
 * @method void set(int $key, StockList $item)
 * @method null|StockList get(int $key)
 * @method void add(StockList $item)
 * @method null|StockList remove(int $key)
 * @method bool removeItem(StockList $item, bool $strict = true)
 * @method bool contains(StockList $item, bool $strict = true)
 * @method null|StockList offsetGet(int $offset)
 * @method void offsetSet(int $offset, StockList $value)
 */
class Stocks extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<StockList>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\StockList';
    }
}

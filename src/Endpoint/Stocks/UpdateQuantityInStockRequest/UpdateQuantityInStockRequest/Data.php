<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data\ItemWithAmountChange;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data\ItemWithQuantity;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest\Data\ItemWithRealStock;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;

/**
 * @extends EntityCollection<ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock>
 * @property ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock[] $data
 * @method ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock[] toArray()
 * @method void set(int $key, ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock $item)
 * @method null|ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock get(int $key)
 * @method void add(ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock $item)
 * @method null|ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock remove(int $key)
 * @method bool removeItem(ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock $item, bool $strict = true)
 * @method bool contains(ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock $item, bool $strict = true)
 * @method null|ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock offsetGet(int $offset)
 * @method void offsetSet(int $offset, ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock $value)
 */
class Data extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ItemWithAmountChange|ItemWithQuantity|ItemWithRealStock>
     * @throws InvalidArgumentException
     */
    public function getItemType(array $data): string
    {
        if (array_key_exists('amountChange', $data)) {
            return ItemWithAmountChange::class;
        }
        if (array_key_exists('quantity', $data)) {
            return ItemWithQuantity::class;
        }
        if (array_key_exists('realStock', $data)) {
            return ItemWithRealStock::class;
        }
        throw new InvalidArgumentException(sprintf('Invalid data structure "%s"', var_export($data, true)));
    }
}

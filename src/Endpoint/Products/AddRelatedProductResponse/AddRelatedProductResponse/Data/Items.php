<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProductResponse\AddRelatedProductResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\RelatedProduct;

/**
 * @extends EntityCollection<RelatedProduct>
 * @property RelatedProduct[] $data
 * @method RelatedProduct[] toArray()
 * @method void set(int $key, RelatedProduct $item)
 * @method null|RelatedProduct get(int $key)
 * @method void add(RelatedProduct $item)
 * @method null|RelatedProduct remove(int $key)
 * @method bool removeItem(RelatedProduct $item, bool $strict = true)
 * @method bool contains(RelatedProduct $item, bool $strict = true)
 * @method null|RelatedProduct offsetGet(int $offset)
 * @method void offsetSet(int $offset, RelatedProduct $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<RelatedProduct>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\RelatedProduct';
    }
}

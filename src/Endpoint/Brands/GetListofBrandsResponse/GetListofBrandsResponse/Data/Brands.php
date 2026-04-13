<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrandsResponse\GetListofBrandsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Brand;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<Brand>
 * @property Brand[] $data
 * @method Brand[] toArray()
 * @method void set(int $key, Brand $item)
 * @method null|Brand get(int $key)
 * @method void add(Brand $item)
 * @method null|Brand remove(int $key)
 * @method bool removeItem(Brand $item, bool $strict = true)
 * @method bool contains(Brand $item, bool $strict = true)
 * @method null|Brand offsetGet(int $offset)
 * @method void offsetSet(int $offset, Brand $value)
 */
class Brands extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<Brand>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\Brand';
    }
}

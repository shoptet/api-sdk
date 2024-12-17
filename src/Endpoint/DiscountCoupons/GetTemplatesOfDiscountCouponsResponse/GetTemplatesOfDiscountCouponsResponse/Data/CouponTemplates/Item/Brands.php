<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCouponsResponse\GetTemplatesOfDiscountCouponsResponse\Data\CouponTemplates\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\BrandNamed;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<BrandNamed>
 * @property BrandNamed[] $data
 * @method BrandNamed[] toArray()
 * @method void set(int $key, BrandNamed $item)
 * @method null|BrandNamed get(int $key)
 * @method void add(BrandNamed $item)
 * @method null|BrandNamed remove(int $key)
 * @method bool removeItem(BrandNamed $item, bool $strict = true)
 * @method bool contains(BrandNamed $item, bool $strict = true)
 * @method null|BrandNamed offsetGet(int $offset)
 * @method void offsetSet(int $offset, BrandNamed $value)
 */
class Brands extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<BrandNamed>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\BrandNamed';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCouponsResponse\GetListOfDiscountCouponsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\DiscountCoupon;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DiscountCoupon>
 * @property DiscountCoupon[] $data
 * @method DiscountCoupon[] toArray()
 * @method void set(int $key, DiscountCoupon $item)
 * @method null|DiscountCoupon get(int $key)
 * @method void add(DiscountCoupon $item)
 * @method null|DiscountCoupon remove(int $key)
 * @method bool removeItem(DiscountCoupon $item, bool $strict = true)
 * @method bool contains(DiscountCoupon $item, bool $strict = true)
 * @method null|DiscountCoupon offsetGet(int $offset)
 * @method void offsetSet(int $offset, DiscountCoupon $value)
 */
class Coupons extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<DiscountCoupon>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DiscountCoupon';
    }
}

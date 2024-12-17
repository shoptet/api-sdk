<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetailResponse\GetCustomerDetailResponse\Data\Customer;

use Shoptet\Api\Sdk\Php\Component\Entity\DeliveryAddressCustomer;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DeliveryAddressCustomer>
 * @property DeliveryAddressCustomer[] $data
 * @method DeliveryAddressCustomer[] toArray()
 * @method void set(int $key, DeliveryAddressCustomer $item)
 * @method null|DeliveryAddressCustomer get(int $key)
 * @method void add(DeliveryAddressCustomer $item)
 * @method null|DeliveryAddressCustomer remove(int $key)
 * @method bool removeItem(DeliveryAddressCustomer $item, bool $strict = true)
 * @method bool contains(DeliveryAddressCustomer $item, bool $strict = true)
 * @method null|DeliveryAddressCustomer offsetGet(int $offset)
 * @method void offsetSet(int $offset, DeliveryAddressCustomer $value)
 */
class DeliveryAddress extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<DeliveryAddressCustomer>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DeliveryAddressCustomer';
    }
}

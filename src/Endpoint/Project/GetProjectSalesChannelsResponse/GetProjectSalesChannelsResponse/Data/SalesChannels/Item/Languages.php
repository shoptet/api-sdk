<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Project\GetProjectSalesChannelsResponse\GetProjectSalesChannelsResponse\Data\SalesChannels\Item;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\TypeLanguage;

/**
 * @extends EntityCollection<TypeLanguage>
 * @property TypeLanguage[] $data
 * @method TypeLanguage[] toArray()
 * @method void set(int $key, TypeLanguage $item)
 * @method null|TypeLanguage get(int $key)
 * @method void add(TypeLanguage $item)
 * @method null|TypeLanguage remove(int $key)
 * @method bool removeItem(TypeLanguage $item, bool $strict = true)
 * @method bool contains(TypeLanguage $item, bool $strict = true)
 * @method null|TypeLanguage offsetGet(int $offset)
 * @method void offsetSet(int $offset, TypeLanguage $value)
 */
class Languages extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<TypeLanguage>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\TypeLanguage';
    }
}

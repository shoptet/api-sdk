<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\SalesChannel;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\SalesChannelLanguage;

/**
 * @extends EntityCollection<SalesChannelLanguage>
 * @property SalesChannelLanguage[] $data
 * @method SalesChannelLanguage[] toArray()
 * @method void set(int $key, SalesChannelLanguage $item)
 * @method null|SalesChannelLanguage get(int $key)
 * @method void add(SalesChannelLanguage $item)
 * @method null|SalesChannelLanguage remove(int $key)
 * @method bool removeItem(SalesChannelLanguage $item, bool $strict = true)
 * @method bool contains(SalesChannelLanguage $item, bool $strict = true)
 * @method null|SalesChannelLanguage offsetGet(int $offset)
 * @method void offsetSet(int $offset, SalesChannelLanguage $value)
 */
class Languages extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<SalesChannelLanguage>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\SalesChannelLanguage';
    }
}

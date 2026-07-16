<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetDiscussionSettingsResponse\GetDiscussionSettingsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\DiscussionSettings;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DiscussionSettings>
 * @property DiscussionSettings[] $data
 * @method DiscussionSettings[] toArray()
 * @method void set(int $key, DiscussionSettings $item)
 * @method null|DiscussionSettings get(int $key)
 * @method void add(DiscussionSettings $item)
 * @method null|DiscussionSettings remove(int $key)
 * @method bool removeItem(DiscussionSettings $item, bool $strict = true)
 * @method bool contains(DiscussionSettings $item, bool $strict = true)
 * @method null|DiscussionSettings offsetGet(int $offset)
 * @method void offsetSet(int $offset, DiscussionSettings $value)
 */
class Settings extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<DiscussionSettings>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DiscussionSettings';
    }
}

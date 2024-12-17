<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPostsResponse\GetListOfDiscussionPostsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\DiscussionPost;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<DiscussionPost>
 * @property DiscussionPost[] $data
 * @method DiscussionPost[] toArray()
 * @method void set(int $key, DiscussionPost $item)
 * @method null|DiscussionPost get(int $key)
 * @method void add(DiscussionPost $item)
 * @method null|DiscussionPost remove(int $key)
 * @method bool removeItem(DiscussionPost $item, bool $strict = true)
 * @method bool contains(DiscussionPost $item, bool $strict = true)
 * @method null|DiscussionPost offsetGet(int $offset)
 * @method void offsetSet(int $offset, DiscussionPost $value)
 */
class Discussion extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<DiscussionPost>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\DiscussionPost';
    }
}

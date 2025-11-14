<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPagesResponse\GetListOfPagesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\PageList;

/**
 * @extends EntityCollection<PageList>
 * @property PageList[] $data
 * @method PageList[] toArray()
 * @method void set(int $key, PageList $item)
 * @method null|PageList get(int $key)
 * @method void add(PageList $item)
 * @method null|PageList remove(int $key)
 * @method bool removeItem(PageList $item, bool $strict = true)
 * @method bool contains(PageList $item, bool $strict = true)
 * @method null|PageList offsetGet(int $offset)
 * @method void offsetSet(int $offset, PageList $value)
 */
class Pages extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<PageList>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\PageList';
    }
}

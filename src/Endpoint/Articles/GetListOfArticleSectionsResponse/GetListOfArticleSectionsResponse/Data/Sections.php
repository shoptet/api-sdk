<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSectionsResponse\GetListOfArticleSectionsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\ArticleSectionList;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<ArticleSectionList>
 * @property ArticleSectionList[] $data
 * @method ArticleSectionList[] toArray()
 * @method void set(int $key, ArticleSectionList $item)
 * @method null|ArticleSectionList get(int $key)
 * @method void add(ArticleSectionList $item)
 * @method null|ArticleSectionList remove(int $key)
 * @method bool removeItem(ArticleSectionList $item, bool $strict = true)
 * @method bool contains(ArticleSectionList $item, bool $strict = true)
 * @method null|ArticleSectionList offsetGet(int $offset)
 * @method void offsetSet(int $offset, ArticleSectionList $value)
 */
class Sections extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ArticleSectionList>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ArticleSectionList';
    }
}

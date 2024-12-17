<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticlesResponse\GetListOfArticlesResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\ArticleList;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<ArticleList>
 * @property ArticleList[] $data
 * @method ArticleList[] toArray()
 * @method void set(int $key, ArticleList $item)
 * @method null|ArticleList get(int $key)
 * @method void add(ArticleList $item)
 * @method null|ArticleList remove(int $key)
 * @method bool removeItem(ArticleList $item, bool $strict = true)
 * @method bool contains(ArticleList $item, bool $strict = true)
 * @method null|ArticleList offsetGet(int $offset)
 * @method void offsetSet(int $offset, ArticleList $value)
 */
class Articles extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ArticleList>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ArticleList';
    }
}

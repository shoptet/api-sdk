<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\Article;

use Shoptet\Api\Sdk\Php\Component\Entity\ArticleUrls;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<ArticleUrls>
 * @property ArticleUrls[] $data
 * @method ArticleUrls[] toArray()
 * @method void set(int $key, ArticleUrls $item)
 * @method null|ArticleUrls get(int $key)
 * @method void add(ArticleUrls $item)
 * @method null|ArticleUrls remove(int $key)
 * @method bool removeItem(ArticleUrls $item, bool $strict = true)
 * @method bool contains(ArticleUrls $item, bool $strict = true)
 * @method null|ArticleUrls offsetGet(int $offset)
 * @method void offsetSet(int $offset, ArticleUrls $value)
 */
class Urls extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ArticleUrls>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ArticleUrls';
    }
}

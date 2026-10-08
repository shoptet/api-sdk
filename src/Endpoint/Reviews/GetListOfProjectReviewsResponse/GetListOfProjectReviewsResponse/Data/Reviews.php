<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProjectReviewsResponse\GetListOfProjectReviewsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ReviewProjectList;

/**
 * @extends EntityCollection<ReviewProjectList>
 * @property ReviewProjectList[] $data
 * @method ReviewProjectList[] toArray()
 * @method void set(int $key, ReviewProjectList $item)
 * @method null|ReviewProjectList get(int $key)
 * @method void add(ReviewProjectList $item)
 * @method null|ReviewProjectList remove(int $key)
 * @method bool removeItem(ReviewProjectList $item, bool $strict = true)
 * @method bool contains(ReviewProjectList $item, bool $strict = true)
 * @method null|ReviewProjectList offsetGet(int $offset)
 * @method void offsetSet(int $offset, ReviewProjectList $value)
 */
class Reviews extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<ReviewProjectList>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ReviewProjectList';
    }
}

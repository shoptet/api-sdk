<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetEvidenceUnitsResponse\GetListOfEetEvidenceUnitsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EetEvidenceUnit;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;

/**
 * @extends EntityCollection<EetEvidenceUnit>
 * @property EetEvidenceUnit[] $data
 * @method EetEvidenceUnit[] toArray()
 * @method void set(int $key, EetEvidenceUnit $item)
 * @method null|EetEvidenceUnit get(int $key)
 * @method void add(EetEvidenceUnit $item)
 * @method null|EetEvidenceUnit remove(int $key)
 * @method bool removeItem(EetEvidenceUnit $item, bool $strict = true)
 * @method bool contains(EetEvidenceUnit $item, bool $strict = true)
 * @method null|EetEvidenceUnit offsetGet(int $offset)
 * @method void offsetSet(int $offset, EetEvidenceUnit $value)
 */
class EvidenceUnits extends EntityCollection
{
    /**
     * @param mixed $data
     * @return class-string<EetEvidenceUnit>
     */
    public function getItemType(mixed $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\EetEvidenceUnit';
    }
}

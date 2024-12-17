<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByOrderCodeResponse\GetProofPaymentDetailByOrderCodeResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentDetail;

/**
 * @extends EntityCollection<ProofPaymentDetail>
 * @property ProofPaymentDetail[] $data
 * @method ProofPaymentDetail[] toArray()
 * @method void set(int $key, ProofPaymentDetail $item)
 * @method null|ProofPaymentDetail get(int $key)
 * @method void add(ProofPaymentDetail $item)
 * @method null|ProofPaymentDetail remove(int $key)
 * @method bool removeItem(ProofPaymentDetail $item, bool $strict = true)
 * @method bool contains(ProofPaymentDetail $item, bool $strict = true)
 * @method null|ProofPaymentDetail offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProofPaymentDetail $value)
 */
class ProofPayments extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProofPaymentDetail>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentDetail';
    }
}

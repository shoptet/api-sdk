<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPaymentsResponse\GetListOfProofPaymentsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentsList;

/**
 * @extends EntityCollection<ProofPaymentsList>
 * @property ProofPaymentsList[] $data
 * @method ProofPaymentsList[] toArray()
 * @method void set(int $key, ProofPaymentsList $item)
 * @method null|ProofPaymentsList get(int $key)
 * @method void add(ProofPaymentsList $item)
 * @method null|ProofPaymentsList remove(int $key)
 * @method bool removeItem(ProofPaymentsList $item, bool $strict = true)
 * @method bool contains(ProofPaymentsList $item, bool $strict = true)
 * @method null|ProofPaymentsList offsetGet(int $offset)
 * @method void offsetSet(int $offset, ProofPaymentsList $value)
 */
class Items extends EntityCollection
{
    /**
     * @param array<string, mixed> $data
     * @return class-string<ProofPaymentsList>
     */
    public function getItemType(array $data): string
    {
        return 'Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentsList';
    }
}

<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Async\SnapshotEndpoint;
use Shoptet\Api\Sdk\Php\Component\Entity\ProofPaymentSnapshot;
use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfAllProofPaymentsResponse\GetListOfAllProofPaymentsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getlistofallproofpayments
 *
 * @method GetListOfAllProofPayments setBody(null $entity)
 * @method null getBody()
 */
class GetListOfAllProofPayments extends Get implements SnapshotEndpoint
{
    protected array $supportedPathParams = [];

    protected array $supportedQueryParams = [
        'language' => false,
        'creationTimeFrom' => false,
        'creationTimeTo' => false,
        'changeTimeFrom' => false,
        'changeTimeTo' => false,
        'taxDateFrom' => false,
        'taxDateTo' => false,
        'isValid' => false,
        'currencyCode' => false,
        'closed' => false,
    ];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetListOfAllProofPaymentsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/snapshot';
    }

    public function getSnapshotResultEntityClass(): string
    {
        return ProofPaymentSnapshot::class;
    }
}

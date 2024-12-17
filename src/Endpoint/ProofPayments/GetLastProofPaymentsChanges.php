<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\PageableGet;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChangesResponse\GetLastProofPaymentsChangesResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/getlastproofpaymentschanges
 *
 * @method GetLastProofPaymentsChanges setBody(null $entity)
 * @method null getBody()
 */
class GetLastProofPaymentsChanges extends PageableGet
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false, 'page' => false, 'itemsPerPage' => false, 'from' => true];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetLastProofPaymentsChangesResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/changes';
    }
}

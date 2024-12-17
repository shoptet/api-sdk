<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Post;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettingsRequest\ProofPaymentDocumentSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettingsResponse\ProofPaymentDocumentSettingsResponse;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/proofpaymentdocumentsettings
 *
 * @method ProofPaymentDocumentSettings setBody(null|array|ProofPaymentDocumentSettingsRequest $entity)
 * @method null|ProofPaymentDocumentSettingsRequest getBody()
 */
class ProofPaymentDocumentSettings extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return ProofPaymentDocumentSettingsRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return ProofPaymentDocumentSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}/document-settings';
    }
}

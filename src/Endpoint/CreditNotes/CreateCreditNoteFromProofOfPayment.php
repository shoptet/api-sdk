<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\CreditNotes;

use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromProofOfPaymentRequest\CreateCreditNoteFromProofOfPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromProofOfPaymentResponse\CreateCreditNoteFromProofOfPaymentResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Post;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/createcreditnotefromproofofpayment
 *
 * @method CreateCreditNoteFromProofOfPayment setBody(null|array<string, mixed>|CreateCreditNoteFromProofOfPaymentRequest $entity)
 * @method null|CreateCreditNoteFromProofOfPaymentRequest getBody()
 */
class CreateCreditNoteFromProofOfPayment extends Post
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): string
    {
        return CreateCreditNoteFromProofOfPaymentRequest::class;
    }

    public function getResponseEntityClass(): string
    {
        return CreateCreditNoteFromProofOfPaymentResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}/credit-note';
    }
}

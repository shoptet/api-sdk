<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\ProofPayments;

use Shoptet\Api\Sdk\Php\Endpoint\Get;

/**
 * @see https://api.docs.shoptet.com/openapi/Proof-payments/downloadproofofpaymentpdf
 *
 * @method DownloadProofOfPaymentPdf setBody(null $entity)
 * @method null getBody()
 */
class DownloadProofOfPaymentPdf extends Get
{
    protected array $supportedPathParams = ['code' => true];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): null
    {
        return null;
    }

    public function getEndpoint(): string
    {
        return '/api/proof-payments/{code}/pdf';
    }
}

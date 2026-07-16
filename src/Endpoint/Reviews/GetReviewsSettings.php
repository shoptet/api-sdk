<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Reviews;

use Shoptet\Api\Sdk\Php\Endpoint\Get;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetReviewsSettingsResponse\GetReviewsSettingsResponse;

/**
 * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getreviewssettings
 *
 * @method GetReviewsSettings setBody(null $entity)
 * @method null getBody()
 */
class GetReviewsSettings extends Get
{
    protected array $supportedPathParams = [];
    protected array $supportedQueryParams = ['language' => false];

    public function getRequestEntityClass(): null
    {
        return null;
    }

    public function getResponseEntityClass(): string
    {
        return GetReviewsSettingsResponse::class;
    }

    public function getEndpoint(): string
    {
        return '/api/reviews/settings';
    }
}

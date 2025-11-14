<?php

namespace Shoptet\Api\Sdk\Php\Authorization;

/**
 * Exception thrown when maximum token count is reached.
 * The API access token has a time-limited validity and the number of API access tokens currently valid
 * for one installation is limited to 5 per OAuth access token.
 * See https://developers.shoptet.com/api/documentation/getting-api-access-token/ for more information.
 */
class MaximumTokenReachedException extends ObtainAccessTokenFailedException
{
}

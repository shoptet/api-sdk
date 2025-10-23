<?php

require_once '/vendor/autoload.php';

// Set partner domain URL for obtaining fresh public API token
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://123.myshoptet.com');

try {
    // Try to authorize request with token for some eshop
    \Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-456-eshop');
} catch (\Shoptet\Api\Sdk\Php\Authorization\TokenHasExpiredException | \Shoptet\Api\Sdk\Php\Authorization\TokenNotFoundException) {
    // If token has expired or not found, create fresh public API token with specific OAuth token for eshop.
    \Shoptet\Api\Sdk\Php\Sdk::createFreshPublicApiToken('token-for-456-eshop', 'oauth-token-for-eshop-456');
    // Try to authorize request again with fresh public API token
    \Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-456-eshop');
}

// Get list of products with authorized request
$listOfProducts = \Shoptet\Api\Sdk\Php\Sdk::getListOfProducts();

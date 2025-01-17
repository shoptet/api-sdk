<?php

require_once '/vendor/autoload.php';

// Set partner domain URL for obtaining fresh public API token
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://123.myshoptet.com');

$requestData = new \Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData([
    'client_id' => 'some-client-id',
    'client_secret' => 'some-client-secret',
    'redirect_uri' => 'https://123.myshoptet.com/after/authorize',
    'code' => 'fdqmcvw0b89p3xv31j7w....', // use code from request
]);

$authorizationFacade = \Shoptet\Api\Sdk\Php\Sdk::createAuthorizationFacade();
// obtain new OAuth token for eshop 456
$authorizationFacade->addonInstallationCallback('oauth-token-for-eshop-456', $requestData);

\Shoptet\Api\Sdk\Php\Sdk::createFreshPublicApiToken('token-for-456-eshop', 'oauth-token-for-eshop-456');
// Try to authorize request with new public API token
\Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-some-eshop');

// Get list of products with authorized request
$listOfProducts = \Shoptet\Api\Sdk\Php\Sdk::getListOfProducts();

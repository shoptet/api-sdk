# Shoptet API SDK PHP

The official PHP library for the Shoptet REST API.

## Documentation

See the [Shoptet API doc](https://api.docs.shoptet.com/shoptet-api/openapi/#).

## Requirements

- PHP 8.3 and later

## Dependencies

SDK require the following extensions and libraries in order to work properly:

- [`curl`](https://secure.php.net/manual/en/book.curl.php) - _You can use your own non-cURL client if you prefer._
- [`json`](https://secure.php.net/manual/en/book.json.php)
- [`psr/log`](https://www.php-fig.org/psr/psr-3/)

> If you use Composer, these dependencies should be handled automatically.
>
> If you install the library manually, please ensure that these extensions are available.

## Installation

### Composer

You can install the sdk via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require shoptet/api-sdk-php
```

To use the sdk, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

### Manual

```php
require_once '/path/to/api-sdk-php/init.php';
```

## Getting Started

### Simple usage

#### Authorization

For authorization, you need to set the partner domain URL and the token.

```php
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://partner-eshop.myshoptet.com');
\Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-target-eshop');
```

If token does not exist or is expired, you will need to obtain it first.
For Obtaining a fresh public API token, you need to have the OAuth token for the eshop.
See [how to get access token](https://developers.shoptet.com/api/documentation/getting-api-access-token/) for more information.

```php
// Set partner domain URL for obtaining fresh public API token
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://partner-eshop.myshoptet.com');

try {
    // Try to authorize request with token for some eshop
    \Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-target-eshop');
} catch (TokenHasExpiredException | TokenNotFoundException) {
    // If token has expired or not found, create fresh public API token with specific OAuth token for eshop.
    \Shoptet\Api\Sdk\Php\Sdk::createFreshPublicApiToken('token-for-target-eshop', 'oauth-token-for-target-eshop');
    // Try to authorize request again with fresh public API token
    \Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-target-eshop');
}
```

You can obtain oAuth access token after addon is installed in the eshop and you receive installation
callback request. See [how to process addon installation](https://developers.shoptet.com/api/documentation/installing-the-addon/) for more information.

```php
// Set partner domain URL for obtaining fresh public API token
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://partner-eshop.myshoptet.com');

$requestData = new \Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken\CreateOauthAccessTokenRequestData([
'client_id' => 'some-client-id',
'client_secret' => 'some-client-secret',
'redirect_uri' => 'https://partner-redirect-domain.com/after/authorize',
'code' => 'fdqmcvw0b89p3xv31j7w....', // use code from request
]);

$authorizationFacade = \Shoptet\Api\Sdk\Php\Sdk::createAuthorizationFacade();
// obtain and store new OAuth token
$authorizationFacade->addonInstallationCallback('oauth-token-for-target-eshop', $requestData);
```

For storing tokens, there is in default basic implementation used `FileTokenStorage` which stores tokens in the file system.
Default path for storing tokens is:

```php
protected const string DEFAULT_FILE_STORAGE_PATH = '/tmp/shoptet-api';
```

This implementation is not recommended for production use. You should implement your own token storage which implements `TokenStorage` interface.

```php
\Shoptet\Api\Sdk\Php\Sdk::setTokenStorage(new MyTokenStorage());
```

#### Call endpoint with request body

```php
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://partner-eshop.myshoptet.com');
\Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-target-eshop');

$createdBrandResponse = \Shoptet\Api\Sdk\Php\Sdk::createBrand([
    'data' => [
        'name' => 'Brand name',
        'description' => 'Brand description',
        'indexName' => 'brand-name',
    ]
]);

$createdBrandResponse->getBody();
//...
```

> [Read more](docs/request_body_processing_methods.md) about possible methods, how to call endpoints with request body.

#### Paginator
```php
\Shoptet\Api\Sdk\Php\Sdk::setPartnerDomainUrl('https://partner-eshop.myshoptet.com');
\Shoptet\Api\Sdk\Php\Sdk::authorizeRequest('token-for-target-eshop');

$listOfProductResponse = \Shoptet\Api\Sdk\Php\Sdk::getListOfProducts();
//... Process response
try {
    $listOfProductResponseNextPage = $listOfProductResponse->getNextPage();
} catch (\Shoptet\Api\Sdk\Php\Exception\OutOfRangeException $e) {
    //Next page is out of range - Last page already reached
}
```

### Webhooks
List of supported webhooks can be found in `\Shoptet\Api\Sdk\Php\Webhook\Event` enum.

Use the enum above or plain string in request body to register new webhook.
```php
Sdk::registerNewWebhook([
    'data' => [
        [
            'event' => \Shoptet\Api\Sdk\Php\Webhook\Event::BRAND_CREATE,
            'url' => 'https://my-domain.com/shoptet-webhook-consumer/brand-create'
        ]
    ],
]);
```

### Custom header

```php
// Add/remove custom header
\Shoptet\Api\Sdk\Php\Sdk::setHeader('X-MY-AWESOME-HEADER', 'my-awesome-header-value');
\Shoptet\Api\Sdk\Php\Sdk::unsetHeader('X-MY-AWESOME-HEADER');
```

### Custom request timeouts

```php
$httpClient = \Shoptet\Api\Sdk\Php\Sdk::getHttpClient();

/**
 * Set connection timeout on 60sec
 * Default is 30sec
 * @see \Shoptet\Api\Sdk\Php\HttpClient\CurlClient::DEFAULT_TIMEOUT
 */
$httpClient->setTimeout(60);

/**
 * Set timeout on 90sec
 * Default is 80sec
 * @see \Shoptet\Api\Sdk\Php\HttpClient\CurlClient::DEFAULT_CONNECT_TIMEOUT
 */
$httpClient->setConnectTimeout(90);

echo $httpClient->getTimeout(); // 60
echo $httpClient->getConnectTimeout(); // 90
```

### Handling Rate Limits
When the API rate limit is exceeded, the SDK throws a `RateLimitExceededException`.
You can handle this exception by retrying the request after the suggested `Retry-After` date.
For more information, see the [Rate Limiting](https://api.docs.shoptet.com/openapi/section/basic-principles/rate-limiting) section in the API documentation.

```php
try {
    // ... Prepare the order entity
    // Send the request, which may exceed the rate limit
    $response = \Shoptet\Api\Sdk\Php\Sdk::createOrder($orderEntity);
} catch (\Shoptet\Api\Sdk\Php\Exception\RateLimitExceededException $e) {
    // Try again after Retry-After
    $retryAfter = $e->getRetryAfter();
    // ...
}
```

### Custom cURL options

You can customize the default CurlClient with extra options.
The keys should be valid `CURLOPT_*` constants or their integer equivalents.
The options will be used in `curl_setopt_array()`.

```php
// Add/remove custom option in HttpClient
\Shoptet\Api\Sdk\Php\Sdk::getHttpClient()
    ->addOption(CURLOPT_PROXY, 'my-proxy.local:80');
    ->removeOption(CURLOPT_PROXY);
```

### Response body type

The SDK provides multiple options how to handle response body automatically.

- Return response body as the corresponding `Entity` object
    - Factory class: `\Shoptet\Api\Sdk\Php\Factory\Response\EntityResponseFactory`
    - Default option
- Return response body as array
    - Factory class: `\Shoptet\Api\Sdk\Php\Factory\Response\ArrayResponseFactory`
- Return response body as raw string
    - Factory class: `\Shoptet\Api\Sdk\Php\Factory\Response\RawResponseFactory`

```php
echo get_class(\Shoptet\Api\Sdk\Php\Sdk::getEshopInfo()->getBody()); // Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse

// Set response factory to ArrayResponseFactory so the response body will return as array (not the Entity)
\Shoptet\Api\Sdk\Php\Sdk::getHttpClient()->setResponseFactory(new \Shoptet\Api\Sdk\Php\Factory\Response\ArrayResponseFactory());

echo gettype(\Shoptet\Api\Sdk\Php\Sdk::getEshopInfo()->getBody()); // array
```

### Custom HttpClient

If current HttpClient is not sufficient you can implement your own Client.
The client must implement `\Shoptet\Api\Sdk\Php\HttpClient\ClientInterface`.

```php
\Shoptet\Api\Sdk\Php\Sdk::setHttpClient($httpClient);
```

### Logger

The library does minimal logging.
Logging can be configured with a [`PSR-3` compatible logger](https://www.php-fig.org/psr/psr-3/).
Default Logger is the `Psr\Log\NullLogger` - So the logs end up in the void.

```php
\Shoptet\Api\Sdk\Php\Sdk::setLogger($logger);
```

### Handeling snapshot endpoints result

If you need to process snapshot job result, i.e. `/api/products/snapshot`, you can use `JobResultProcessor` or Sdk helper method `Sdk::processSnapshotResult`.
This method gets job result file path from response and processes it.

It returns an iterator over snapshot job result data. This method use Generator to process data with
smaller memory footprint.

```php
$snapshotResultData = Sdk::processSnapshotResult('3xhzjz2');

foreach ($snapshotResultData as $entity) {
    // do something with entity
}
```

### Exceptions

All exceptions should implement `Shoptet\Api\Sdk\Php\Exception\Exception`.

There are 3 base types of Exceptions:

- `Shoptet\Api\Sdk\Php\Exception\LogicException`
- `Shoptet\Api\Sdk\Php\Exception\RuntimeException`
- `Shoptet\Api\Sdk\Php\Exception\ReflectionException`

### Tests

To run unit tests, use the following command:

```bash
composer test:unit
```

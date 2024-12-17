# Shoptet API SDK PHP

The official PHP library for the Shoptet REST API.

## Documentation

See the [Shoptet API doc](https://shoptet.docs.apiary.io/#).

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

**@todo** Currently not working as it's not public

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

#### Call endpoint with request body
```php
\Shoptet\Api\Sdk\Php\Sdk::setAccessToken('ENTER_SHOPTET_ACCESS_TOKEN');

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
\Shoptet\Api\Sdk\Php\Sdk::setAccessToken('ENTER_SHOPTET_ACCESS_TOKEN');

$listOfProductResponse = \Shoptet\Api\Sdk\Php\Sdk::getListOfProducts();
//... Process response
try {
    $listOfProductResponseNextPage = $listOfProductResponse->getNextPage();
} catch (\Shoptet\Api\Sdk\Php\Exception\OutOfRangeException $e) {
    //Next page is out of range - Last page already reached
}
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

### Exceptions

All exceptions should implement `Shoptet\Api\Sdk\Php\Exception\Exception`.

There are 3 base types of Exceptions:

- `Shoptet\Api\Sdk\Php\Exception\LogicException`
- `Shoptet\Api\Sdk\Php\Exception\RuntimeException`
- `Shoptet\Api\Sdk\Php\Exception\ReflectionException`

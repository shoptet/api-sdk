# Request body processing methods

This part describe possible methods how to call endpoints with request body.

## Methods

### Array in `$requestBody`:

```php
\Shoptet\Api\Sdk\Php\Sdk::createBrand([
    'data' => [
        'name' => 'SDK example 001',
        'description' => 'SDK example 001 - Call endpoint with array in $requestBody',
        'indexName' => 'sdk-example-001',
    ]
]);
```

### Array defined entity in `$requestBody`:

```php
$brandEntity = new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest([
    'data' => [
        'name' => 'SDK example 002',
        'description' => 'SDK example 002 - Call endpoint with array defined entity in $requestBody',
        'indexName' => 'sdk-example-002',
    ]
]);
\Shoptet\Api\Sdk\Php\Sdk::createBrand($brandEntity);
```

### Manually set entity in `$requestBody`:

```php
$brandEntity = (new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest())
    ->setData(
        (new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest\Data())
            ->setName('SDK example 003')
            ->setDescription('SDK example 003 - Call endpoint with manually set entity in $requestBody')
            ->setIndexName('sdk-example-003')
    );
\Shoptet\Api\Sdk\Php\Sdk::createBrand($brandEntity);
```

[Back](../README.md#getting-Started)

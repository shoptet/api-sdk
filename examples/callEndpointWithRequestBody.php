<?php

require_once '/vendor/autoload.php';

\Shoptet\Api\Sdk\Php\Sdk::setAccessToken('ENTER_SHOPTET_ACCESS_TOKEN');

/**
 * Call endpoint with array $requestBody example:
 */
\Shoptet\Api\Sdk\Php\Sdk::createBrand([
    'data' => [
        'name' => 'SDK example 001',
        'description' => 'SDK example 001 - Call endpoint with array in $requestBody',
        'indexName' => 'sdk-example-001',
    ],
]);

/**
 * Call endpoint with array define entity in $requestBody:
 */
$brand = new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest([
    'data' => [
        'name' => 'SDK example 002',
        'description' => 'SDK example 002 - Call endpoint with array define entity in $requestBody',
        'indexName' => 'sdk-example-002',
    ],
]);
\Shoptet\Api\Sdk\Php\Sdk::createBrand($brand);

/**
 * Call endpoint with manually set entity in $requestBody:
 */
$brand = (new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest())
    ->setData(
        (new \Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest\Data())
            ->setName('SDK example 003')
            ->setDescription('SDK example 003 - Call endpoint with manually set entity in $requestBody')
            ->setIndexName('testovaci-data-z-sdk')
    );
\Shoptet\Api\Sdk\Php\Sdk::createBrand($brand);

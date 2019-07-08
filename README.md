# http-client-php

> PHP client for Openprovider API

Description
-----------

This software is a PHP client to operate with the [Openprovider API].

[Openprovider API]: https://github.com/openprovider/api-documentation

At this time the API is stable enough to be used, however please note that during the beta phase we may still make breaking changes.

Please use [v1beta branch/version](https://github.com/openprovider/http-client-php/tree/v1beta).

Usage
-----------
1. Include as any other PHP library: `composer require openprovider/http-client-php`;
2. Access API via the `Client` class:
```php
<?php

// Include autoloader.
require __DIR__ . '/vendor/autoload.php';

// Create new http client.
$httpClient = new GuzzleHttp\Client();

// Create new Configuration.
$configuration = new \Openprovider\Api\Rest\Client\Base\Configuration();

// Setup configuration: i.e. set Api token / host.
$configuration->setAccessToken("myaccesstoken"); // If needed.
$configuration->setHost('https://api.openprovider.eu');

// Build api client using created client & configuration.
$client = new \Openprovider\Api\Rest\Client\Client($httpClient, $configuration);

// Call $client->{Module}->{Api service}->{Api method}
$result = $client->getAuthModule()->getAuthApi()->login(
    new \Openprovider\Api\Rest\Client\Auth\Model\AuthLoginRequest([
        'username' => 'myusername', 
        'password' => 'mypassword',
        'ip'       => '0.0.0.0',
    ])
);

// Operate with result.
print_r($result);

```

# http-client-php

> PHP client for Openprovider API

Description
-----------

This software is a PHP client to operate with the [Openprovider API](https://github.com/openprovider/api-documentation).

At this time the API is stable enough to be used, however please note that during the beta phase we may still make breaking changes.

Please use [v1beta branch/version](https://github.com/openprovider/http-client-php/tree/v1beta).

Usage
-----------
1. Include as any other PHP library: `composer require openprovider/http-client-php`;
2. Access API via the `Client` class:
```php
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

use Openprovider\Api\Rest\Client\Auth\Model\AuthLoginRequest;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Client;
use GuzzleHttp\Client as HttpClient;

// Create new http client.
$httpClient = new HttpClient();

// Create new configuration.
$configuration = new Configuration();

// Build api client for using created client & configuration.
$client = new Client($httpClient, $configuration);

// Our credentials;
$username = 'user';
$password = 'pass';

// Retrieve token for further using.
$loginResult = $client->getAuthModule()->getAuthApi()->login(
    new AuthLoginRequest([
        'username' => $username,
        'password' => $password,
    ])
);

// Set token to configuration (it will update the $client).
$configuration->setAccessToken($loginResult->getData()->getToken());

// Use this client for API calls.
$result = $client->getTldModule()->getTldServiceApi()->getTld('com');

// Operate with the result.
print_r($result);
```
3. Check the ./examples directory for more complex examples.

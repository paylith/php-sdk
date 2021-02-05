# Paylith PHP SDK

[![Latest Version](https://img.shields.io/github/release/paylith/paylith-php-sdk.svg?style=flat-square)](https://github.com/paylith/paylith-php-sdk/releases)
[![Build Status](https://travis-ci.org/paylith/paylith-php-sdk.svg?branch=master)](https://travis-ci.org/paylith/paylith-php-sdk)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
<!--[![Total Downloads](https://img.shields.io/packagist/dt/paylith/paylith-php-sdk.svg?style=flat-square)](https://packagist.org/packages/paylith/paylith-php-sdk)-->

Paylith PHP Library provides access to Paylith API from Applications written in PHP language. 

## Requirements
- PHP 7.1 or higher

## Installation

### Composer
Install the library using [Composer](https://getcomposer.org)
```bash
$ composer require paylith/paylith-php-sdk
```

Use autoloader
```php
require_once('vendor/autoload.php');
```

## Usage
Create a Merchant link
```php
use Paylith\Client;

$client = new Paylith\Client('TestApiKey', 'TestApiSecret');

try {
    $result = $paylith->createMerchantLink(
        'TestConversationId',
        'TestUserId',
        'TestUserEmail',
        'TestUserIpAddress',
    );
} catch (Exception $exception) {
    // catch errors
}
```

Get Payment Detail
```php
use Paylith\Resources\Payment;

$payment = new Paylith\Resources\Payment();

try {
    $result = $payment->getDetail([
        'TestIpAddres',
        'TestPaymentId'
    ]);
} catch (Exception $exception) {
    // catch errors
}
```

## Documentation
See the [Paylith API documentation](https://docs.paylith.com)

## Support
If you have any questions or issues, please contact our support at support@paylith.com.

## License
MIT license. For more information see the [LICENSE file](LICENSE)

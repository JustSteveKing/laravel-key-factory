# A simple package to generate Eloquent Model Keys

[![Latest Version on Packagist](https://img.shields.io/packagist/v/juststeveking/laravel-key-factory.svg?style=flat-square)](https://packagist.org/packages/juststeveking/laravel-key-factory)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/juststeveking/laravel-key-factory/run-tests?label=tests)](https://github.com/juststeveking/laravel-key-factory/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/juststeveking/laravel-key-factory/Check%20&%20fix%20styling?label=code%20style)](https://github.com/juststeveking/laravel-key-factory/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/juststeveking/laravel-key-factory.svg?style=flat-square)](https://packagist.org/packages/juststeveking/laravel-key-factory)

Laravel Key Factory is a simple package to generate Eloquent Model Keys for your models easily. This is something I do quite often, instead of using UUID's which can be quite unfriendly to look at, I use Model keys which are unique strings generated for each model.

## Installation

You can install the package via composer:

```bash
composer require juststeveking/laravel-key-factory
```

You can publish and run the migrations with:

You can publish the config file with:
```bash
php artisan vendor:publish --provider="JustSteveKing\KeyFactory\KeyFactoryServiceProvider" --tag="laravel-key-factory-config"
```

This is the contents of the published config file:

```php
return [
    'key' => [
        'length' => 20,
    ]
];
```

## Usage

This is a very simple to use package. There are two available methods to generate the key:

### Using the Key Factory

```php
$key = \JustSteveKing\KeyFactory\KeyFactory::generate(
    prefix: 'test', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
);
```

### Using the Str helper

```php
$key = \Illuminate\Support\Str::key(
    prefix: 'test', // what you want to prefix your keys with.
    length: 20, // optional - the default of 20 is set in the config.
);
```

## Eloquent Integration

There is an eloquent model trait available to use called `HasKey` which will:

> When you are creating an eloquent model, the trait will be booted.
> It will get the first 3 characters of the Model name, force them to lowercase and append a "_" and use this as the prefix for the Key Factory

An example:

- User Model: `use_12345678909876543212`
- Project Model: `pro_12345678909876543212`

Currently this isn't a configured option as it is easy to override or implement yourself.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steve McDougall](https://github.com/JustSteveKing)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

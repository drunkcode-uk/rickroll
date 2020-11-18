# Rick Roll

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drunkcode/rickroll.svg?style=flat-square)](https://packagist.org/packages/drunkcode/rickroll)
[![Build Status](https://img.shields.io/travis/drunkcode/rickroll/master.svg?style=flat-square)](https://travis-ci.org/drunkcode/rickroll)
[![Quality Score](https://img.shields.io/scrutinizer/g/drunkcode/rickroll.svg?style=flat-square)](https://scrutinizer-ci.com/g/drunkcode/rickroll)
[![Total Downloads](https://img.shields.io/packagist/dt/drunkcode/rickroll.svg?style=flat-square)](https://packagist.org/packages/drunkcode/rickroll)

Rick Roll users of your application by applying a Middleware that will randomly determine their fate!

Applying the RickRollMiddleware to your Web Middleware Group will randomly generate a number on each web request, if the outcome is zero, they will be returned a view with an embed youtube video of Rick Astley's Never Gonna Give You Up instead of their expected request.

## Installation

You can install the package via composer:

```bash
composer require drunkcode/rickroll
```

## Usage

Add the `Drunkcode\RickRoll\Http\Middleware\RickRollMiddleware::class` middleware to your web middleware group in `app\Http\Kernel.php` file

```php
// app\Http\Kernel.php
protected $middlewareGroups = [
    'web' => [
        ...
        \Drunkcode\RickRoll\Http\Middleware\RickRollMiddleware::class,
    ],
    ...
];
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rayblair06@hotmail.com instead of using the issue tracker.

## Credits

-   [Ray Blair](https://github.com/drunkcode)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

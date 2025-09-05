# Filament Abyss Theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/:package_slug)

Aesthetic Abyss theme for FilamentPHP.

## Installation

You can install the package via composer:

```bash
composer require nagi/filament-abyss-theme
```

Add a new item to the `input` array of your `vite.config.js` file:

```js
'vendor/nagi/filament-abyss-theme/resources/css/theme.css';
```

Run:

```bash
npm run build
```

Register the plugin on your panel (e.g. `/app/Providers/Filament/AdminPanelProvider.php`):

```php
use Nagi\FilamentAbyssTheme\FilamentAbyssThemePlugin;

$panel
  ->plugin(FilamentAbyssThemePlugin::make())
```

You're all set!

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Osama Nagi](https://github.com/OsamaNagi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package disk-monitor-entries

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cybernerdie/disk-monitor-entries.svg?style=flat-square)](https://packagist.org/packages/cybernerdie/disk-monitor-entries)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cybernerdie/disk-monitor-entries/run-tests?label=tests)](https://github.com/cybernerdie/disk-monitor-entries/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cybernerdie/disk-monitor-entries/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/cybernerdie/disk-monitor-entries/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cybernerdie/disk-monitor-entries.svg?style=flat-square)](https://packagist.org/packages/cybernerdie/disk-monitor-entries)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/disk-monitor-entries.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/disk-monitor-entries)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require cybernerdie/disk-monitor-entries
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="disk-monitor-entries-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="disk-monitor-entries-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="disk-monitor-entries-views"
```

## Usage

```php
$diskMonitorEntries = new Cybernerdie\DiskMonitorEntries();
echo $diskMonitorEntries->echoPhrase('Hello, Cybernerdie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joshua Paul](https://github.com/cybernerdie)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

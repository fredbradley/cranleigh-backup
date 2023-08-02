# Easy setup of Cranleigh Backup Configuration for Laravel projects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fredbradley/cranleigh-backup.svg?style=flat-square)](https://packagist.org/packages/fredbradley/cranleigh-backup)
[![Total Downloads](https://img.shields.io/packagist/dt/fredbradley/cranleigh-backup.svg?style=flat-square)](https://packagist.org/packages/fredbradley/cranleigh-backup)
![GitHub Actions](https://github.com/fredbradley/cranleigh-backup/actions/workflows/main.yml/badge.svg)

Rather than faff with config files, just include this package, and it will do half the work for you.

## Installation

You can install the package via composer:

```bash
composer require fredbradley/cranleigh-backup
```

## Usage

1. Confirm that you have an `env()` variable called `CRANLEIGH_BACKUP_PASSWORD` set in your `.env` file.
2. Ensure that you have the `spatie/laravel-backup` package installed and configured to use the `cranleigh-backup` disk. (Find any references to `sftp` and change to `cranleigh-backup`)
3. That's it. You're done.

### Testing

```bash
composer test
```
_Always aiming for 100% code coverage!_
```bash
composer test-coverage
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email code@fredbradley.uk instead of using the issue tracker.

## Credits

-   [Fred Bradley](https://github.com/fredbradley)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

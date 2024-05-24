# List of districts and villages in Mizoram

[![Latest Version on Packagist](https://img.shields.io/packagist/v/valpuia/mizokhua.svg?style=flat-square)](https://packagist.org/packages/valpuia/mizokhua)
[![Total Downloads](https://img.shields.io/packagist/dt/valpuia/mizokhua.svg?style=flat-square)](https://packagist.org/packages/valpuia/mizokhua)

Awlsam tak a Mizoram chhung a district leh khua te neih na (Easy way to get lists of district and village in Mizoram)

## Installation

You can install the package via composer:

```bash
composer require valpuia/mizokhua

php artisan mizokhua:install
```
`mizokhua:install` hmang hian migration files a in published nghal a chuan run nghal turin a rawn zawt ang che (After running `mizokhua:install` it published migration files and ask you to run the migration)

## Seeder
```bash
php artisan mizokhua:seed
```
`mizokhua:seed` hmang hian districts leh villages te database ah a in dahlut anga, awlsam takin i application ah a hnuai ami ang hian i hmang thei ang (Using `mizokhua:seed` command it seeds districts and villages in database and you can easily use like below)

## Usage

```php
use Valpuia\Mizokhua\Models\District;
use Valpuia\Mizokhua\Models\Village;

Village::with('district')
    // ->where('district_id', 1)
    // ->where('name', 'Aibawk')
    ->get();

District::with('villages')
    // ->where('name', 'Aizawl')
    ->get();
```

## TODO
- Publish Seeders
- Publish Models

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Valpuia](https://github.com/valpuia)
- [All Contributors](../../contributors)
- [LGD](https://lgdirectory.gov.in/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

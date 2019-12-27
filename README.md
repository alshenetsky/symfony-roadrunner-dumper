[![Version][badge_packagist_version]][link_packagist]
[![Version][badge_php_version]][link_packagist]
[![Downloads count][badge_downloads_count]][link_packagist]
[![License][badge_license]][link_license]

# symfony-roadrunner-dumper
Variable dumper for Symfony + Roadrunner applications

Using this bundle you can dump any variable using `\dev\dd()` function just like a regular `dd()`, even using a [Roadrunner](https://github.com/spiral/roadrunner)!

## Install

Require this package with composer using the following command:

```bash
$ composer require --dev alshenetsky/symfony-roadrunner-dumper "^1.0"
```

## RoadRunner use-case

For example, if you trying to `dd('test');` somewhere, you will see something like that:

```text
worker error: invalid data found in the buffer (possible echo)
```

But, if you would use this bundle like `\dev\dd('test');`, it will work.

### See also:
Same thing for Laravel framework:
[Stacked-dumper-laravel](https://github.com/avto-dev/stacked-dumper-laravel)


[badge_packagist_version]:https://img.shields.io/packagist/v/alshenetsky/symfony-roadrunner-dumper.svg?maxAge=180
[badge_php_version]:https://img.shields.io/packagist/php-v/alshenetsky/symfony-roadrunner-dumper.svg?longCache=true
[badge_license]:https://img.shields.io/packagist/l/alshenetsky/symfony-roadrunner-dumper.svg?longCache=true
[badge_downloads_count]:https://img.shields.io/packagist/dt/alshenetsky/symfony-roadrunner-dumper.svg?maxAge=180
[link_packagist]:https://packagist.org/packages/alshenetsky/symfony-roadrunner-dumper
[link_license]:https://github.com/alshenetsky/symfony-roadrunner-dumper/blob/master/LICENSE
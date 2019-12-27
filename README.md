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

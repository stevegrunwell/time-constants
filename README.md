# Time Constants

[![CI Pipeline](https://github.com/stevegrunwell/time-constants/actions/workflows/ci-cd.yml/badge.svg?branch=develop)](https://github.com/stevegrunwell/time-constants/actions/workflows/ci-cd.yml)
[![Packagist](https://img.shields.io/packagist/v/stevegrunwell/time-constants.svg)](https://packagist.org/packages/stevegrunwell/time-constants)


The Time Constants package defines a number of useful PHP constants within your application, making it easier to express measures of time.

For example, assume we have a `cache()` function that accepts three arguments:

1. The cache key.
2. The value to cache.
3. The amount of time (in seconds) to cache the value.

Currently, caching a value for 24 hours might look something like this:

```php
cache($cacheKey, $value, 24 * 60 * 60);
```

Instead of spending the time figuring out what `24 * 60 * 60` means (or the fact that `86400` is meant to be one day in seconds), **Time Constants** allows you to represent the time using an easy-to-understand PHP constant:

```php
cache($cacheKey, $value, DAY_IN_SECONDS);
```

If the requirements changed and we needed to cache the value for multiple days, we can rewrite it as:

```php
cache($cacheKey, $value, 5 * DAY_IN_SECONDS);
```

These constants may seem familiar to WordPress developers, as they're absolutely [inspired by WordPress' use of time constants](https://codex.wordpress.org/Easier_Expression_of_Time_Constants). This package goes a bit further, however, adding `*_IN_MINUTES` constants, for easier use with libraries like [Laravel's `Cache` facade](https://laravel.com/docs/master/cache#cache-usage).

## Installation

Time Constants is intended to be installed via Composer:

```sh
$ composer require stevegrunwell/time-constants
```

The package has been configured to automatically expose the `constants.php` file via the Composer-generated autoloader, so you'll be ready to use the constants as soon as the package has been installed!

## Defined constants

This is a list of all constants defined by this package, along with their values. Each constant is wrapped in a `if (! defined(...))` conditional, ensuring these constants can easily be redefined if necessary and won't conflict with existing constants.

> Please note that these constants are defined for convenience, and not necessarily for accuracy; all months are treated as 30 days, and years as 365 days. If you need support for leap years or more advanced measures of time, you might consider [PHP's `DateTime` class](http://php.net/manual/en/book.datetime.php) or [Nesbot's Carbon package](https://carbon.nesbot.com/docs/).

### Time based in seconds

* `ONE_SECOND` (1 second)
* `MINUTE_IN_SECONDS` (60 seconds)
* `HOUR_IN_SECONDS` (3600 seconds)
* `DAY_IN_SECONDS` (86,400 seconds)
* `WEEK_IN_SECONDS` (604,800 seconds)
* `MONTH_IN_SECONDS` (2,592,000 seconds)
* `YEAR_IN_SECONDS` (31,536,000 seconds)

### Time based in minutes

* `ONE_MINUTE` (1 minute)
* `HOUR_IN_MINUTES` (60 minutes)
* `DAY_IN_MINUTES` (1,440 minutes)
* `WEEK_IN_MINUTES` (10,080 minutes)
* `MONTH_IN_MINUTES` (43,200 minutes)
* `YEAR_IN_MINUTES` (525,600 minutes)

### Multipliers

These can be helpful when dealing with fractions of a second. For example, all of the following are equivalent:

```php
6000 === (6 * ONE_SECOND) * 1000 === 6 * MILLISECONDS_PER_SECOND
```

* `MILLISECONDS_PER_SECOND` (1,000ms/s)
* `MICROSECONDS_PER_SECOND` (1,000,000µs/s)
* `NANOSECONDS_PER_SECOND` (1,000,000,000ns/s)
* `PICOSECONDS_PER_SECOND` (1,000,000,000,000ps/s)

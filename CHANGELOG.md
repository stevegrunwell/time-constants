# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Version 2.0.2] — 2024-08-23

* Use the `const` keyword instead of `define()` for slight performance gains, easier readability, and better IDE interoperability. Props @ChadSikorra and @ramsey for the recommendation! ([#23])

## [Version 2.0.1] — 2024-08-22

* Now that constants are namespaced, remove the `defined()` checks and unnecessary multiplication in order to a) help IDEs and b) remove an (albeit tiny) level of overhead ([#21])

## [Version 2.0.0] — 2024-08-20

**⚠️ Please note:** this is a **major** release, as it contains a breaking change to how the constants are defined. An extra file has been included to help bridge the gap between versions if you wish to run version 2.x of this library without updating all references across your app(s).

* Introduce a Makefile for running dev commands ([#17])
* Move the constants from the global namespace into the `TimeConstants` namespace ([#18])
* Switch from PHP-CS-Fixer to PHP_CodeSniffer with the PHPCompatibility ruleset ([#19])
    * With this change, we can run **one** version of PHPUnit in CI, using PHP_CodeSniffer to detect any backwards compatibility breaks with this (admittedly simply) library
    * With only one version of PHPUnit necessary, tests have been upgraded for PHPUnit 11.x

### Breaking changes

This release moves the constants defined by this package from the global namespace into the `TimeConstants` namespace.

Your implementations of these constants can be updated in either of the following ways:

1. Explicitly import the constant(s) being used:
    ```php
    use const TimeConstants\HOUR_IN_SECONDS;
    ```
2. Update references to use the constants new, fully-qualified names:
    ```diff
    - cache($key, $value, HOUR_IN_SECONDS);
    + cache($key, $value, \TimeConstants\HOUR_IN_SECONDS);
    ```

#### Temporary aliases to help with migration

Alternatively, you may include the new `GlobalAliases.php` file as a short-term fix. This file will take the newly-namespaced constants and **also** define them in the global namespace.

Either of the following approaches will ensure the aliased versions are loaded:

1. (**Preferred**) Add the file to your `composer.json` file in the `autoload.files` array:
    ```json
    "autoload": {
        "files": [
            "vendor/stevegrunwell/time-constants/src/GlobalAliases.php"
        ]
    }
    ```
2. Explicitly requiring the file:
    ```diff
      require_once __DIR__ . '/vendor/autoload.php';
    + require_once __DIR__ . '/vendor/stevegrunwell/time-constants/src/GlobalAliases.php';
    ```

Please note that this `GlobalAliases.php` file will be removed in the next **major** release (e.g. `v3.x`) of this library.

## [Version 1.2.0] — 2023-12-18

* Add the following multipliers to help with sub-second timings ([#13]):
    - `MILLISECONDS_PER_SECOND` (1,000ms/s)
    - `MICROSECONDS_PER_SECOND` (1,000,000µs/s)
    - `NANOSECONDS_PER_SECOND` (1,000,000,000ns/s)
    - `PICOSECONDS_PER_SECOND` (1,000,000,000,000ps/s)
* Remove the composer.lock file, overhaul CI pipeline so tests can be run across all supported versions of PHP ([#14], props @peter279k).
* Define an `archive.exclude` section in `composer.json` ([#15]).

## [Version 1.1.2] – 2022-01-18

* Add PHP 8 support in `composer.json` ([#9])
* Move from Travis CI to GitHub Actions ([#10])
* Rename `master` to `main`

## [Version 1.1.1] — 2019-11-25

* Fixed a copy+paste error in the comment for `ONE_MINUTE`.
* Add namespacing to the tests, minimum PHP version to `composer.json` ([#5], props @peter279k).
* Added PHP 7.4 to the Travis CI build matrix.

## [Version 1.1.0] - 2019-01-01

* Addition of both `ONE_SECOND` and `ONE_MINUTE`, which are both equal to `1` ([#2]).
* Conform to the PSR-2 coding standards ([#3]).
* Adjustments to the PHPUnit and Travis CI configuration files.

## [Version 1.0.0] - 2018-03-21

Initial public release of the library, with the following constants:

* `MINUTE_IN_SECONDS` (60 seconds)
* `HOUR_IN_SECONDS` (3600 seconds)
* `DAY_IN_SECONDS` (86,400 seconds)
* `WEEK_IN_SECONDS` (604,800 seconds)
* `MONTH_IN_SECONDS` (2,592,000 seconds)
* `YEAR_IN_SECONDS` (31,536,000 seconds)
* `HOUR_IN_MINUTES` (60 minutes)
* `DAY_IN_MINUTES` (1,440 minutes)
* `WEEK_IN_MINUTES` (10,080 minutes)
* `MONTH_IN_MINUTES` (43,200 minutes)
* `YEAR_IN_MINUTES` (525,600 minutes)


[Unreleased]: https://github.com/stevegrunwell/time-constants/compare/main...develop
[Version 2.0.2]: https://github.com/stevegrunwell/time-constants/releases/tag/v2.0.2
[Version 2.0.1]: https://github.com/stevegrunwell/time-constants/releases/tag/v2.0.1
[Version 2.0.0]: https://github.com/stevegrunwell/time-constants/releases/tag/v2.0.0
[Version 1.2.0]: https://github.com/stevegrunwell/time-constants/releases/tag/v1.2.0
[Version 1.1.2]: https://github.com/stevegrunwell/time-constants/releases/tag/v1.1.2
[Version 1.1.1]: https://github.com/stevegrunwell/time-constants/releases/tag/v1.1.1
[Version 1.1.0]: https://github.com/stevegrunwell/time-constants/releases/tag/v1.1.0
[Version 1.0.0]: https://github.com/stevegrunwell/time-constants/releases/tag/v1.0.0
[#2]: https://github.com/stevegrunwell/time-constants/pull/2
[#3]: https://github.com/stevegrunwell/time-constants/pull/3
[#5]: https://github.com/stevegrunwell/time-constants/pull/5
[#9]: https://github.com/stevegrunwell/time-constants/pull/9
[#10]: https://github.com/stevegrunwell/time-constants/pull/10
[#13]: https://github.com/stevegrunwell/time-constants/pull/13
[#14]: https://github.com/stevegrunwell/time-constants/pull/14
[#15]: https://github.com/stevegrunwell/time-constants/pull/15
[#17]: https://github.com/stevegrunwell/time-constants/pull/17
[#18]: https://github.com/stevegrunwell/time-constants/pull/18
[#19]: https://github.com/stevegrunwell/time-constants/pull/19
[#21]: https://github.com/stevegrunwell/time-constants/pull/21
[#23]: https://github.com/stevegrunwell/time-constants/pull/23

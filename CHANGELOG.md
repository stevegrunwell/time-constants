# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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

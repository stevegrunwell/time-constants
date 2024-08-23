<?php

/**
 * Global aliases for time constants.
 *
 * This is meant to help bridge the gap between versions 1.x and 2.x of the library.
 *
 * If your application or library has references to the old, globally-namespaced constants, you may
 * either load this file via `autoload.files` in your `composer.json` file or by requiring the file
 * directly in your code.
 *
 * @package TimeConstants
 */

declare(strict_types=1);

$time_constants = [
    'ONE_SECOND',
    'MINUTE_IN_SECONDS',
    'HOUR_IN_SECONDS',
    'DAY_IN_SECONDS',
    'WEEK_IN_SECONDS',
    'MONTH_IN_SECONDS',
    'YEAR_IN_SECONDS',
    'ONE_MINUTE',
    'HOUR_IN_MINUTES',
    'DAY_IN_MINUTES',
    'WEEK_IN_MINUTES',
    'MONTH_IN_MINUTES',
    'YEAR_IN_MINUTES',
    'MILLISECONDS_PER_SECOND',
    'MICROSECONDS_PER_SECOND',
    'NANOSECONDS_PER_SECOND',
    'PICOSECONDS_PER_SECOND',
];

foreach ($time_constants as $constant) {
    if (!defined($constant)) {
        define($constant, constant('TimeConstants\\' . $constant));
    }
}

unset($time_constants);

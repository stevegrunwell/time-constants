<?php

/**
 * Defines useful time-based constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

declare(strict_types=1);

namespace TimeConstants;

/**
 * Time based in seconds.
 *
 * This is commonly used for things like cache expirations or task scheduling, and are heavily
 * inspired by WordPress' time constants.
 *
 * @link https://codex.wordpress.org/Easier_Expression_of_Time_Constants
 */

/* One second. */
if (!defined(__NAMESPACE__ . '\\ONE_SECOND')) {
    define(__NAMESPACE__ . '\\ONE_SECOND', 1);
}

/* One minute = 60 seconds. */
if (!defined(__NAMESPACE__ . '\\MINUTE_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\MINUTE_IN_SECONDS', 60);
}

/* One hour = 60 minutes. */
if (!defined(__NAMESPACE__ . '\\HOUR_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS);
}

/* One day = 24 hours. */
if (!defined(__NAMESPACE__ . '\\DAY_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS);
}

/* One week = 7 days. */
if (!defined(__NAMESPACE__ . '\\WEEK_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS);
}

/* For common usage, assume one month = 30 days. */
if (!defined(__NAMESPACE__ . '\\MONTH_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS);
}

/* For common usage, assume one year = 365 days. */
if (!defined(__NAMESPACE__ . '\\YEAR_IN_SECONDS')) {
    define(__NAMESPACE__ . '\\YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS);
}

/**
 * Time based in minutes.
 *
 * For platforms that measure time based in minutes (such as Laravel's Cache facade), these
 * constants provide similar functionality.
 */

/* One minute. */
if (!defined(__NAMESPACE__ . '\\ONE_MINUTE')) {
    define(__NAMESPACE__ . '\\ONE_MINUTE', 1);
}

/* One hour = 60 minutes. */
if (!defined(__NAMESPACE__ . '\\HOUR_IN_MINUTES')) {
    define(__NAMESPACE__ . '\\HOUR_IN_MINUTES', 60);
}

/* One day = 24 hours. */
if (!defined(__NAMESPACE__ . '\\DAY_IN_MINUTES')) {
    define(__NAMESPACE__ . '\\DAY_IN_MINUTES', 24 * HOUR_IN_MINUTES);
}

/* One week = 7 days. */
if (!defined(__NAMESPACE__ . '\\WEEK_IN_MINUTES')) {
    define(__NAMESPACE__ . '\\WEEK_IN_MINUTES', 7 * DAY_IN_MINUTES);
}

/* For common usage, assume one month = 30 days. */
if (!defined(__NAMESPACE__ . '\\MONTH_IN_MINUTES')) {
    define(__NAMESPACE__ . '\\MONTH_IN_MINUTES', 30 * DAY_IN_MINUTES);
}

/* For common usage, assume one year = 365 days. */
if (!defined(__NAMESPACE__ . '\\YEAR_IN_MINUTES')) {
    define(__NAMESPACE__ . '\\YEAR_IN_MINUTES', 365 * DAY_IN_MINUTES);
}

/**
 * Common multipliers.
 *
 * These are useful when dealing with timing and things like cache expirations.
 */

/* A millisecond is 1/1000 of a second. */
if (!defined(__NAMESPACE__ . '\\MILLISECONDS_PER_SECOND')) {
    define(__NAMESPACE__ . '\\MILLISECONDS_PER_SECOND', 1000);
}

/* A microsecond is one millionth of a second. */
if (!defined(__NAMESPACE__ . '\\MICROSECONDS_PER_SECOND')) {
    define(__NAMESPACE__ . '\\MICROSECONDS_PER_SECOND', 1000000);
}

/* A nanosecond is one billionth of a second. */
if (!defined(__NAMESPACE__ . '\\NANOSECONDS_PER_SECOND')) {
    define(__NAMESPACE__ . '\\NANOSECONDS_PER_SECOND', 1000000000);
}

/* A picosecond is one trillionth of a second. */
if (!defined(__NAMESPACE__ . '\\PICOSECONDS_PER_SECOND')) {
    define(__NAMESPACE__ . '\\PICOSECONDS_PER_SECOND', 1000000000000);
}

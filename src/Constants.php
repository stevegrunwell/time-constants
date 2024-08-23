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

/**
 * One second.
 */
const ONE_SECOND = 1;

/**
 * One minute is 60 seconds.
 */
const MINUTE_IN_SECONDS = 60;

/**
 * One hour is 60 minutes.
 */
const HOUR_IN_SECONDS = 3600;

/**
 * One day is 24 hours.
 */
const DAY_IN_SECONDS = 86400;

/**
 * One week is 7 days.
 */
const WEEK_IN_SECONDS = 604800;

/**
 * For general purposes, assume that one month is 30 days.
 */
const MONTH_IN_SECONDS = 2592000;

/**
 * For general purposes, assume that one year is 365 days.
 */
const YEAR_IN_SECONDS = 31536000;

/**
 * Time based in minutes.
 *
 * For platforms that measure time based in minutes (such as Laravel's Cache facade), these
 * constants provide similar functionality.
 */

/**
 *  One minute.
 */
const ONE_MINUTE = 1;

/**
 * One hour is 60 minutes.
 */
const HOUR_IN_MINUTES = 60;

/**
 * One day is 24 hours.
 */
const DAY_IN_MINUTES = 1440;

/**
 * One week is 7 days.
 */
const WEEK_IN_MINUTES = 10080;

/**
 * For general purposes, assume that one month is 30 days.
 */
const MONTH_IN_MINUTES = 43200;

/**
 * For general purposes, assume that one year is 365 days.
 */
const YEAR_IN_MINUTES = 525600;

/**
 * Common multipliers.
 *
 * These are useful when dealing with timing and things like cache expirations.
 */

/**
 * A millisecond is 1/1000 of a second.
 */
const MILLISECONDS_PER_SECOND = 1000;

/**
 * A microsecond is one millionth of a second.
 */
const MICROSECONDS_PER_SECOND = 1000000;

/**
 * A nanosecond is one billionth of a second.
 */
const NANOSECONDS_PER_SECOND = 1000000000;

/**
 * A picosecond is one trillionth of a second.
 */
const PICOSECONDS_PER_SECOND = 1000000000000;

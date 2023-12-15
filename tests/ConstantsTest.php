<?php

namespace Tests;

/**
 * Tests the definition of time constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    /**
     * Ensure that each constant is defined and matches the expected value.
     *
     * @dataProvider constantsProvider
     *
     * @param string $constant The name of the constant.
     * @param int    $expected The expected value for the constant.
     *
     * @return void
     */
    public function testConstantsAreDefined(string $constant, int $expected): void
    {
        $this->assertTrue(defined($constant), "Expected the '{$constant}' constant to be defined.");
        $this->assertSame($expected, constant($constant));
    }

    /**
     * Provides a list of all constants defined by this package.
     *
     * @return array{string, int}
     */
    public function constantsProvider(): array
    {
        return [
            // Time in seconds.
            'One second (in seconds)'       => ['ONE_SECOND', 1],
            'One minute (in seconds)'       => ['MINUTE_IN_SECONDS', 60],
            'One hour (in seconds)'         => ['HOUR_IN_SECONDS', 3600],
            'One day (in seconds)'          => ['DAY_IN_SECONDS', 86400],
            'One week (in seconds'          => ['WEEK_IN_SECONDS', 604800],
            'One 30-day month (in seconds)' => ['MONTH_IN_SECONDS', 2592000],
            'One year (in seconds)'         => ['YEAR_IN_SECONDS', 31536000],

            // Time in minutes.
            'One minute (in minutes)'       => ['ONE_MINUTE', 1],
            'One hour (in minutes)'         => ['HOUR_IN_MINUTES', 60],
            'One day (in minutes)'          => ['DAY_IN_MINUTES', 1440],
            'One week (in minutes'          => ['WEEK_IN_MINUTES', 10080],
            'One 30-day month (in minutes)' => ['MONTH_IN_MINUTES', 43200],
            'One year (in minutes)'         => ['YEAR_IN_MINUTES', 525600],

            // Multipliers.
            'Milliseconds per second'       => ['MILLISECONDS_PER_SECOND', 1000],
            'Microseconds per second'       => ['MICROSECONDS_PER_SECOND', 1000000],
            'Nanoseconds per second'        => ['NANOSECONDS_PER_SECOND', 1000000000],
            'Picoseconds per second'        => ['PICOSECONDS_PER_SECOND', 1000000000000],
        ];
    }
}

<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\TestCase;

/**
 * Tests the definition of time constants.
 *
 * @package SteveGrunwell\TimeConstants
 */
class ConstantsTest extends TestCase
{
    /**
     * Ensure that each constant is defined and matches the expected value.
     *
     * @param string $constant The name of the constant.
     * @param int    $expected The expected value for the constant.
     *
     * @return void
     */
    #[DataProvider('constantsProvider')]
    public function testConstantsAreDefined(string $constant, int $expected): void
    {
        $namespaced = 'TimeConstants\\' . $constant;
        $this->assertTrue(defined($namespaced), "Expected the '{$namespaced}' constant to be defined.");
        $this->assertSame($expected, constant($namespaced));

        $this->assertFalse(
            defined($constant),
            "The '{$constant}' constant should no longer be defined in the global namespace."
        );
    }

    /**
     * Once we've verified that only the namespaced constants are defined by default, let's load
     * our GlobalAliases.php file.
     */
    #[DataProvider('constantsProvider')]
    #[Depends('testConstantsAreDefined')]
    public function testCompatibilityLayer(string $constant, int $expected): void
    {
        require_once __DIR__ . '/../src/GlobalAliases.php';

        $this->assertTrue(
            defined($constant),
            "When the compatibility layer is loaded, '{$constant}' should exist in the global namespace."
        );
        $this->assertSame(
            constant('TimeConstants\\' . $constant),
            constant($constant),
            sprintf('The global version of %1$s should match TimeConstants\\%1$s', $constant)
        );
    }

    /**
     * Provides a list of all constants defined by this package.
     *
     * @return iterable<string, array{string, int}>
     */
    public static function constantsProvider(): iterable
    {
        // Time in seconds.
        yield 'One second (in seconds)'       => ['ONE_SECOND', 1];
        yield 'One minute (in seconds)'       => ['MINUTE_IN_SECONDS', 60];
        yield 'One hour (in seconds)'         => ['HOUR_IN_SECONDS', 3600];
        yield 'One day (in seconds)'          => ['DAY_IN_SECONDS', 86400];
        yield 'One week (in seconds'          => ['WEEK_IN_SECONDS', 604800];
        yield 'One 30-day month (in seconds)' => ['MONTH_IN_SECONDS', 2592000];
        yield 'One year (in seconds)'         => ['YEAR_IN_SECONDS', 31536000];

        // Time in minutes.
        yield 'One minute (in minutes)'       => ['ONE_MINUTE', 1];
        yield 'One hour (in minutes)'         => ['HOUR_IN_MINUTES', 60];
        yield 'One day (in minutes)'          => ['DAY_IN_MINUTES', 1440];
        yield 'One week (in minutes'          => ['WEEK_IN_MINUTES', 10080];
        yield 'One 30-day month (in minutes)' => ['MONTH_IN_MINUTES', 43200];
        yield 'One year (in minutes)'         => ['YEAR_IN_MINUTES', 525600];

        // Multipliers.
        yield 'Milliseconds per second'       => ['MILLISECONDS_PER_SECOND', 1000];
        yield 'Microseconds per second'       => ['MICROSECONDS_PER_SECOND', 1000000];
        yield 'Nanoseconds per second'        => ['NANOSECONDS_PER_SECOND', 1000000000];
        yield 'Picoseconds per second'        => ['PICOSECONDS_PER_SECOND', 1000000000000];
    }
}

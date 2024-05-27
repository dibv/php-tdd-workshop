<?php

declare(strict_types=1);

namespace KataTests;

use DateTime;
use Kata\MorningRoutine;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class MorningRoutineTest extends TestCase
{
    /**
     * @throws \Exception
     */
    #[DataProvider('routineDataProvider')]
    public function testMorningRoutine(
        string $time,
        string $expectedRoutine,
    ): void {
        $now = new DateTime($time);
        $morningRoutine = new MorningRoutine($now);

        self::assertSame($expectedRoutine, $morningRoutine->whatShouldIDoNow());
    }

    public static function routineDataProvider(): array
    {
        return [
            ['06:00', MorningRoutine::EXERCISE],
            ['06:44', MorningRoutine::EXERCISE],
            ['06:45', MorningRoutine::SHOWER],
            ['06:59', MorningRoutine::SHOWER],
            ['07:00', MorningRoutine::READ],
            ['07:29', MorningRoutine::READ],
            ['07:30', MorningRoutine::STUDY],
            ['07:59', MorningRoutine::STUDY],
            ['08:00', MorningRoutine::BREAKFAST],
            ['09:59', MorningRoutine::BREAKFAST],
            ['05:59', MorningRoutine::FREE],
            ['00:00', MorningRoutine::FREE],
            ['09:01', MorningRoutine::FREE],
        ];
    }
}

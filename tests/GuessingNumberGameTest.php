<?php

declare(strict_types=1);

namespace KataTests;

use Kata\NumberGuesserGame;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Random\RandomException;

final class GuessingNumberGameTest extends TestCase
{
    /**
     * @throws Exception|RandomException
     */
    public function test_if_guess_is_correct(): void
    {
        $mockedGuesserGame = $this->createMock(NumberGuesserGame::class);
        $guesserGame = new NumberGuesserGame();


        $mockedGuesserGame->method('randomNumberGenerator')->willReturn(5);

        self::assertTrue($guesserGame->guessIsCorrect(5, $mockedGuesserGame->randomNumberGenerator()));
    }
}

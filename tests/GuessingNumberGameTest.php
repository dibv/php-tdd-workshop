<?php

declare(strict_types=1);

namespace KataTests;

use Kata\NumberGuesserGame;
use PHPUnit\Framework\TestCase;

final class GuessingNumberGameTest extends TestCase
{
    public function test_if_guess_is_correct(): void
    {
        $game = new NumberGuesserGame();

        self::assertTrue($game->guessIsCorrect(5));
    }
}

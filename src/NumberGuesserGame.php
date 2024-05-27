<?php

declare(strict_types=1);

namespace Kata;

final class NumberGuesserGame
{
    public function guessIsCorrect(int $number): bool
    {
        if ($number === 5) {
            return true;
        } else {
            return false;
        }

    }
}

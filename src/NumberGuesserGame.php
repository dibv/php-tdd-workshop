<?php

declare(strict_types=1);

namespace Kata;

use Random\RandomException;

class NumberGuesserGame
{
    private int $attempts;


    /**
     * @throws RandomException
     */
    public function randomNumberGenerator(): int
    {
        return random_int(0, 9);
    }

    public function guessIsCorrect(int $userNumber, $randomGeneratedNumber): bool
    {
        //$this->attempts++;

        if ($userNumber === $randomGeneratedNumber) {
            return true;
        }

        return false;

    }
}

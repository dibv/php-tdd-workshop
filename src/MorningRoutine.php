<?php

declare(strict_types=1);

namespace Kata;

use DateTimeImmutable;

final class MorningRoutine
{
    const EXERCISE = 'Do exercise';
    const BREAKFAST = 'Have breakfast';
    const READ = 'Read';
    const STUDY = 'Study';
    const SHOWER = 'Take a shower';
    const FREE = 'No activity';



    public function __construct(
        private readonly \DateTimeInterface $currentTime,
    )
    {
        $this->routineTime = new \DateTime();
    }

    public function whatShouldIDoNow(): string
    {
        if (
            $this->currentTime >= $this->routineTime->setTime(6,0)  &&
            $this->currentTime < $this->routineTime->setTime(6,45)
        ) {
            return self::EXERCISE;
        }

        if (
            $this->currentTime >= $this->routineTime->setTime(6,45)  &&
            $this->currentTime < $this->routineTime->setTime(7,0)
        ) {
            return self::SHOWER;
        }

        if (
            $this->currentTime >= $this->routineTime->setTime(7,0)  &&
            $this->currentTime < $this->routineTime->setTime(7,30)
        ) {
            return self::READ;
        }

        if (
            $this->currentTime >= $this->routineTime->setTime(7,30)  &&
            $this->currentTime < $this->routineTime->setTime(8,00)
        ) {
            return self::STUDY;
        }

        if (
            $this->currentTime >= $this->routineTime->setTime(8,00)  &&
            $this->currentTime < $this->routineTime->setTime(9,00)
        ) {
            return self::BREAKFAST;
        }

        return self::FREE;
    }
}

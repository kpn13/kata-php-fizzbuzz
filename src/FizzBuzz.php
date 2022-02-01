<?php

namespace Kpn13\KataPhpFizzbuzz;

class FizzBuzz
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    const FIZZ_BUZZ = self::FIZZ.self::BUZZ;

    public function __invoke(int $number): int|string
    {
        if ($this->isFizzBuzz($number)) {
            return self::FIZZ_BUZZ;
        }

        if ($this->isFizz($number)) {
            return self::FIZZ;
        }

        if ($this->isBuzz($number)) {
            return self::BUZZ;
        }

        return $number;
    }

    private function isFizz(int $number): bool
    {
        return $number % 3 === 0 || str_contains($number, 3);
    }

    private function isBuzz(int $number): bool
    {
        return $number % 5 === 0 || str_contains($number, 5);
    }

    private function isFizzBuzz(int $number): bool
    {
        return $number % 3 === 0 && $number % 5 === 0;
    }
}
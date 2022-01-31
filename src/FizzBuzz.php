<?php

namespace Kpn13\KataPhpFizzbuzz;

class FizzBuzz
{
    public function __invoke(int $nb): int|string
    {
        if ($nb % 3 === 0 && $nb % 5 === 0) {
            return "FizzBuzz";
        }

        if ($nb % 3 === 0 || str_contains($nb, 3)) {
            return "Fizz";
        }

        if ($nb % 5 === 0 || str_contains($nb, 5)) {
            return "Buzz";
        }

        return $nb;
    }
}
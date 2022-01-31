<?php

require_once './vendor/autoload.php';

use \Kpn13\KataPhpFizzbuzz\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($i = 1; $i <= 100; $i++) {
    echo $fizzBuzz($i)."\n";
}

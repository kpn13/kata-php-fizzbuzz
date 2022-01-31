<?php

namespace Test\Kpn13\KataPhpFizzbuzz;

use Kpn13\KataPhpFizzbuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testShouldEchoNumberForNumber()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(1);

        $this->assertEquals(1, $result);
    }

    public function testShouldEchoFizzForThree()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(3);

        $this->assertEquals("Fizz", $result);
    }

    public function testShouldEchoBuzzForFive()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(5);

        $this->assertEquals("Buzz", $result);
    }

    public function testShouldEchoFizzBuzzForFifteen()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(15);

        $this->assertEquals("FizzBuzz", $result);
    }

    public function testShouldEchoFizzFor13()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(13);

        $this->assertEquals("Fizz", $result);
    }

    public function testShouldEchoBuzzFor153()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz(152);

        $this->assertEquals("Buzz", $result);
    }
}

<?php

use PHPUnit\Framework\TestCase;
require_once "NumberChecker.php";

class NumberCheckerTest extends TestCase {
   
    // número par
    public function testEvenNumber()
    {
        $checker = new NumberChecker(4);

        $this->assertTrue($checker->isEven());
    }

    // número impar
    public function testOddNumber()
    {
        $checker = new NumberChecker(5);

        $this->assertFalse($checker->isEven());
    }

    // número positivo
    public function testPositiveNumber()
    {
        $checker = new NumberChecker(10);

        $this->assertTrue($checker->isPositive());
    }

    // número negativo
    public function testNegativeNumber()
    {
        $checker = new NumberChecker(-3);

        $this->assertFalse($checker->isPositive());
    }

    // cero
    public function testZero()
    {
        $checker = new NumberChecker(0);

        $this->assertFalse($checker->isPositive());
    }
}


?>
<?php

use PHPUnit\Framework\TestCase;
require_once "SpeedChecker.php";

class SpeedCheckerTest extends TestCase {

    public function testVerySlowSpeed() {

        $checker = new SpeedChecker();

        $this->assertEquals(
            "Muy lento",
            $checker->checkSpeed(20)
        );
    }

    public function testAdequateSpeed() {

        $checker = new SpeedChecker();

        $this->assertEquals(
            "Velocidad adecuada",
            $checker->checkSpeed(50)
        );
    }

    public function testMildExcess() {

        $checker = new SpeedChecker();

        $this->assertEquals(
            "Exceso leve",
            $checker->checkSpeed(70)
        );
    }

    public function testModerateExcess() {
        $checker = new SpeedChecker();

        $this->assertEquals(
            "Exceso moderado",
            $checker->checkSpeed(90)
        );
    }

    public function testSeriousExcess() {

        $checker = new SpeedChecker();

        $this->assertEquals(
            "Exceso grave",
            $checker->checkSpeed(120)
        );
    }
}
?>
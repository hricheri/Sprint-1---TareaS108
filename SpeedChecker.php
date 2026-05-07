<?php

class SpeedChecker {

    public function checkSpeed(int $speed): string {

        if ($speed < 30) {
            return "Muy lento";
        }

        if ($speed <= 60) {
            return "Velocidad adecuada";
        }

        if ($speed <= 80) {
            return "Exceso leve";
        }

        if ($speed <= 100) {
            return "Exceso moderado";
        }

        return "Exceso grave";
    }
}

?>
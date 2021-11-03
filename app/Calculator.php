<?php

namespace App;

class Calculator{
    
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        return $num1 / $num2;
    }

    public function pow($num1, $num2) {
        $bil = $num1;
        for($i=0;$i<($num2-1);$i++)
        {
            $bil = $bil * $num1;
        }
        return $bil;
    }
}
<?php

class Multiply2Test extends \PHPUnit\Framework\TestCase{
    public function testMultiply(){
        
        $calculator = new App\Calculator;
        $result = $calculator->multiply(30,5);

        $this->assertEquals(15,$result);
    }
}
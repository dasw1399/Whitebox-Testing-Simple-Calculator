<?php

class MultiplyTest extends \PHPUnit\Framework\TestCase{
    public function testMultiply(){
        
        $calculator = new App\Calculator;
        $result = $calculator->multiply(30,5);

        $this->assertEquals(150,$result);
    }
}
<?php

class SubtractTest extends \PHPUnit\Framework\TestCase{

    public function testSubtract(){
        
        $calculator = new App\Calculator;
        $result = $calculator->subtract(30,5);

        $this->assertEquals(25,$result);
    }

}
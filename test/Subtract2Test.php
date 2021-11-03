<?php

class Subtract2Test extends \PHPUnit\Framework\TestCase{

    public function testSubtract(){
        
        $calculator = new App\Calculator;
        $result = $calculator->subtract(30,5);

        $this->assertEquals(30,$result);
    }

}
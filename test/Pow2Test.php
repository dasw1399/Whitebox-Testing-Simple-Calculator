<?php

class Pow2Test extends \PHPUnit\Framework\TestCase{
 
    public function testPow(){
        
        $calculator = new App\Calculator;
        $result = $calculator->pow(2,5);

        $this->assertEquals(28,$result);
    }

}
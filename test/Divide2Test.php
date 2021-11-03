<?php

class Divide2Test extends \PHPUnit\Framework\TestCase{

    public function testDivide(){
        
        $calculator = new App\Calculator;
        $result = $calculator->divide(30,5);

        $this->assertEquals(7,$result);
    }

}
<?php

class DivideTest extends \PHPUnit\Framework\TestCase{

    public function testDivide(){
        
        $calculator = new App\Calculator;
        $result = $calculator->divide(30,5);

        $this->assertEquals(6,$result);
    }

}
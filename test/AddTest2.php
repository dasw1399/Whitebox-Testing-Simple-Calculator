<?php

class AddTest2 extends \PHPUnit\Framework\TestCase{
    public function testAdd(){
        
        $calculator = new App\Calculator;
        $result = $calculator->add(30,5);

        $this->assertEquals(30,$result);
    }
}
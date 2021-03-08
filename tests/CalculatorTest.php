<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {

        $calculator = new App\Calculator;
        $result = $calculator->add(17, 3);

        $this->assertEquals(20, $result);
    }

    public function testSubtract() {

        $calculator = new App\Calculator;
        $result = $calculator->subtract(17, 7);

        $this->assertEquals(10, $result);
    }

    public function testMultiply() {

        $calculator = new App\Calculator;
        $result = $calculator->multiply(3, 7);

        $this->assertEquals(21, $result);
    }

    public function testDivide() {

        $calculator = new App\Calculator;
        $result = $calculator->divide(21, 7);

        $this->assertEquals(3, $result);
    }
}
<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(7, $calc->add(3, 4));
    }

    public function testMultiply() {
        $calc = new Calculator();
        $this->assertEquals(12, $calc->multiply(3, 4));
    }
}

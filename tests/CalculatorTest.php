<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calculator = new Calculator();
        $this->assertSame(5, $calculator->add(2, 3));
    }

    public function testMultiply(): void
    {
        $calculator = new Calculator();
        $this->assertSame(6, $calculator->multiply(2, 3));
    }
}
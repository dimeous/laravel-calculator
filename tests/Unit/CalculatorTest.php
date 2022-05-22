<?php

namespace Tests\Unit;

use App\Http\Helpers\Calculator;
use PHPUnit\Framework\TestCase;

/**
 *  Test class for Calculator
 */
class CalculatorTest extends TestCase
{

    /**
     * Test addition of calculator
     * @return void
     */
    public function testCalculatorAddition()
    {
        $result = Calculator::calculate('5 + 2');
        $this->assertEquals(7, $result);
    }

    /**
     * Test divide of calculator
     * @return void
     */
    public function testCalculatorDivide()
    {
        $result = Calculator::calculate('10 / 2');
        $this->assertEquals(5, $result);
    }

    /**
     * Test multiply of calculator
     * @return void
     */
    public function testCalculatorMultiply()
    {
        $result = Calculator::calculate('10 * 2');
        $this->assertEquals(20, $result);
    }

    /**
     * Test square root of calculator
     * @return void
     */

    public function testCalculatorSQRT()
    {
        $result = Calculator::calculate('sqrt 9');
        $this->assertEquals(3, $result);
    }
}

<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($firstNumber, $secondNumber, $expected)
    {
        $calculator = new Calculator();

        $this->assertEquals($expected, $calculator->add($firstNumber,$secondNumber));
    }

    public function additionProvider()
    {
        return [
            array(1,1,2),
            array(20,10,30),
            array(-100,30,-70),
            array(10.5,0.5,11)
        ];
    }
}
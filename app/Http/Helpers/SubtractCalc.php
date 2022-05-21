<?php

namespace App\Http\Helpers;
/**
 * Subtract class
 */
class SubtractCalc implements ICalc
{
    /**
     * Var of  sign
     * @var string
     */
    private $sign = '-';

    /**
     *  Function to calculate
     * @param float $input1
     * @param float $input2
     * @return float
     */
    public function calculate($input1, $input2=null): float
    {
        return $input1 - $input2;
    }

    /**
     * Function that get the sign
     * @return string
     */
    public function getSign():string
    {
        return $this->sign;
    }
}

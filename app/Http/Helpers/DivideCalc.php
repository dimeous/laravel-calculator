<?php

namespace App\Http\Helpers;
use phpDocumentor\Reflection\Types\Integer;

/**
 * Divide class
 */
class DivideCalc implements ICalc
{
    /**
     * Var of  sign
     * @var string
     */
    private $sign = '/';

    /**
     *  Function to calculate
     * @param float $input1
     * @param float $input2
     * @return float
     */
    public function calculate($input1, $input2)
    {
        return $input1 / $input2;
    }

    /**
     * Function that get the sign
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }
}

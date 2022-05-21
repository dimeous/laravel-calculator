<?php

namespace App\Http\Helpers;
/**
 * Square class
 */
class SquareCalc implements ICalc
{
    /**
     * Var of  sign
     * @var string
     */
    private $sign = 'sqrt';

    /**
     *  Function to calculate
     * @param float $input1
     * @return float
     */
    public function calculate( $input1, $input2=null):float
    {
        return  sqrt($input1);
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

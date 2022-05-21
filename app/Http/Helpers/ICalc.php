<?php

namespace App\Http\Helpers;
/**
 * Interface for operation of calculator
 */

interface ICalc
{
    /**
     * @param $input1
     * @param $input2
     * @return float|integer
     */

    public function calculate($input1,$input2=null);

    /**
     * Fuction return sign of operation
     * @return string
     */
    public function getSign(): string;
}

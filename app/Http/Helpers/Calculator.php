<?php

namespace App\Http\Helpers;


/**
 * Calculator class that build objects from string
 */
class Calculator
{
    /**
     * Function that call objects for calculation
     * @param string $input
     * @return mixed|string|void
     */
    public static function calculate(string $input)
    {
        $input = strtolower($input);
        $sequence = self::findOperator($input);
        if ($sequence) {
            try {
                $className = 'App\\Http\\Helpers\\Calc' . ucfirst($sequence[0]);
                if (class_exists($className)) {
                    return new $className($sequence[1], $sequence[2]);
                }
            } catch (\Exception $ex) {
                return 'error:' . $ex->getMessage();
            }
        }
    }

    /**
     * function find operators and operands
     * @param $string
     * @return array|null
     */
    public static function findOperator($string): ?array
    {
        $operators = ['+' => 'Add', '-' => 'Substract', '*' => 'Multiply', '/' => 'Divide', 'sqrt' => 'Sqrt'];
        foreach ($operators as $operator => $class)
            if (preg_match($operator, $string)) {
                if ($operator == 'sqrt') {
                    return [$class, floatval(substr_replace($operator, '', $string)), null];
                }
                $array = explode($string, $operator);
                return [$class, $array[0], $array[1]];
            }
        return null;
    }
}

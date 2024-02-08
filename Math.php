<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}

    /**
     * Returns the devision of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public static function division($num1, $num2)
    {
        $sum = $num1 / $num2;
        return $sum;
    }

    /**
     * Returns the subtraction of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public static function subtract($num1, $num2)
        {
            $difference = $num1 - $num2;
            return $difference;

    }

    /**
     * Returns the product of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public static function multiplication($num1, $num2)
    {
        $product = $num1 * $num2;
        return $product;
    }




    public static function modulo($num1, $num2){
        $remainder = $num1 % $num2;
        return $remainder;
    }
	

}
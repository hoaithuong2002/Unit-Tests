<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class FizzBuzz
{
    static function read($number)
    {
        if (self::testInvalidNumber($number)) {
            return "Invalid number!";
        }
        if (self::testNotFizzBuzzNumber($number)) {
            return '1';
        }
        if ($number == 3) {
            return "Fizz";
        }
        if ($number == 5) {
            return "Buzz";
        }
        if ($number ==15) {
            return "FizzBuzz";
        }
        return "";
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testInvalidNumber($number)
    {
        return $number == 0;
    }

    /**
     * @param $number
     * @return bool
     */
    public static function testNotFizzBuzzNumber($number)
    {
        return $number == 1;
    }


}
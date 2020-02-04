<?php


namespace Kata;


class FizzBuzz
{
    public function print($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Is not a number');
        }
        return $number;
    }
}

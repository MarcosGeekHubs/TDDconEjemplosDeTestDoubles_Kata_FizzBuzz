<?php


namespace Kata;


class FizzBuzz
{
    public function print($number)
    {
        $this->isInteger($number);
        return $number;
    }

    /**
     * @param $number
     * @throws \Exception
     */
    protected function isInteger($number): void
    {
        if (!is_numeric($number)) {
            throw new \Exception('Is not a number');
        }
    }
}

<?php


namespace Kata;


class FizzBuzz
{
    const MULTIPLE_OF_THREE = 3;
    const MULTIPLE_OF_FIVE = 5;
    protected $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function print($number)
    {
        $this->isNotIntegerThowException($number);
        $result = $number;
        if ($this->isNumberMultipleOf($number, self::MULTIPLE_OF_THREE)) {
            $this->database->initConection();
            $result = $this->database->getStringToThreeNumber();
        }

        if ($this->isNumberMultipleOf($number, self::MULTIPLE_OF_FIVE)) {
            $result = $this->database->getStringToFiveNumber();
        }


        return $result;
    }

    /**
     * @param $number
     * @throws \Exception
     */
    protected function isNotIntegerThowException($number): void
    {
        if (!is_numeric($number)) {
            throw new \Exception('Is not a number');
        }
    }

    /**
     * @param $number
     * @return bool
     */
    protected function isNumberMultipleOf($number, $multiple): bool
    {
        return 0 === $number % $multiple;
    }


}

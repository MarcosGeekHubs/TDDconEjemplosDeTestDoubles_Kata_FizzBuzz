<?php


namespace Kata;


class FizzBuzz
{
    protected $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function print($number)
    {
        $this->isNotIntegerThowException($number);
        $result = $number;
        if ($this->isNumberMultipleOfThree($number)) {
            $this->database->initConection();
            $result =  $this->database->getStringToThreeNumber();
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
    protected function isNumberMultipleOfThree($number): bool
    {
        return 0 === $number % 3;
    }
}

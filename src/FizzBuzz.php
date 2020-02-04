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
        $this->isInteger($number);

        if (0 === $number % 3) {
            return $this->database->getStringToThreeNumber();
        }


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

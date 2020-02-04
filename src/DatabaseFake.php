<?php

namespace Kata;


class DatabaseFake implements DatabaseInterface
{
    public $conection = null;


    public function initConection()
    {
        $this->conection = 'MySql Connection';
    }

    public function getStringToThreeNumber()
    {
        return 'Fizz';

    }

}
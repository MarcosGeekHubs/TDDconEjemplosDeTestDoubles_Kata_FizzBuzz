<?php

namespace Kata;

interface DatabaseInterface
{
    public function initConection();

    public function getStringToThreeNumber();
}
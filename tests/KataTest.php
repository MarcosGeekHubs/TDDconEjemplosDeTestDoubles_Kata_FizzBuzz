<?php


namespace Kata\Test;

use Kata\Factorial;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{


    /** @test */
    public function return_one_when_print_number_one()
    {
        //Given
        $fizzBuzz = new FizzBuzz();

        //When
        $fizzBuzz->pirnt(1);

        //Then
        $this->assertEquals(1, $kata->checkNumber(1));
    }


}

<?php


namespace Kata\Test;

use Kata\FizzBuzz;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{


    /** @test */
    public function return_one_when_print_number_one()
    {
        //Given
        $fizzBuzz = new FizzBuzz();

        //When
        $result = $fizzBuzz->print(1);

        //Then
        $this->assertEquals(1, $result);
    }


}

<?php


namespace Kata\Test;

use Kata\FizzBuzz;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

    protected $fizzBuzz;

    protected function setUp(): void
    {
        //Given
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function return_one_when_print_number_one()
    {
        //When
        $result = $this->fizzBuzz->print(1);

        //Then
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function return_two_when_print_number_two()
    {
        //When
        $result = $this->fizzBuzz->print(2);

        //Then
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function throw_exception_when_argument_is_string()
    {
        //When
        $result = $this->fizzBuzz->print('two');

        //Then
        $this->expectException(InvalidArgumentException::class);

    }


}

<?php


namespace Kata\Test;

use Kata\DatabaseFake;
use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;


class KataTest extends TestCase
{

    protected $fizzBuzz;
    protected $databaseFake;

    protected function setUp(): void
    {
        //Given
        $this->databaseFake = new DatabaseFake();

        // $result = $this->fizzbuzz->passNumber(3);
        //$this->fizzBuzz = new FizzBuzz($this->databaseFake);

        $this->databaseFake = $this->createMock(DatabaseFake::class);
        //Test Double Stuff
        $this->databaseFake->method('getStringToThreeNumber')->willReturn('Fizz');
        $this->databaseFake->method('getStringToFiveNumber')->willReturn('Buzz');

        //Test Double Spy
        $this->databaseFake->method('initConection');

        $this->fizzBuzz = new FizzBuzz($this->databaseFake);

    }

    /** @test */
    public function return_one_when_print_number_one()
    {
        //Test double Spy
        $this->databaseFake->expects($this->never())->method('initConection');

        //When
        $result = $this->fizzBuzz->print(1);

        //Then
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function return_two_when_print_number_two()
    {
        //Test double Spy
        $this->databaseFake->expects($this->never())->method('initConection');

        //When
        $result = $this->fizzBuzz->print(2);

        //Then
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function throw_exception_when_argument_is_string()
    {
        //Test double Spy
        $this->databaseFake->expects($this->never())->method('initConection');

        $this->expectException(\Exception::class);
        //When
        $result = $this->fizzBuzz->print('two');

        //Then

    }

    /** @test */
    public function return_fizz_when_print_number_tree()
    {
        //Test double Spy
        $this->databaseFake->expects($this->exactly(1))->method('initConection');

        //Test double Stuff
        //When
        $result = $this->fizzBuzz->print(3);

        //Then
        $this->assertEquals('Fizz', $result);
    }

    /** @test */
    public function return_buzz_when_print_number_five()
    {
        //Test double Spy
        $this->databaseFake->expects($this->exactly(1))->method('initConection');

        //Test double Stuff
        //When
        $result = $this->fizzBuzz->print(5);

        //Then
        $this->assertEquals('Buzz', $result);
    }
    

}

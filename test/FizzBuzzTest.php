<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testAssert()
    {
        $fb = new FizzBuzz();
        $this->assertInstanceOf('FizzBuzz', $fb);
    }

    public function testOne()
    {
        $data = 1;
        $this->assertEquals('1', FizzBuzz::process($data));
    }

    public function testFizz()
    {
        $data = 3;
        $this->assertEquals('Fizz', FizzBuzz::process($data));
    }

    public function testBuzz()
    {
        $data = 5;
        $this->assertEquals('Buzz', FizzBuzz::process($data));
    }

    public function testFizzBuzz()
    {
        $data = 15;
        $this->assertEquals('FizzBuzz', FizzBuzz::process($data));
    }

    public function testFizzContainsNumber()
    {
        $data = 31;
        $this->assertEquals('Fizz', FizzBuzz::process($data));
    }

    public function testBuzzContainsNumber()
    {
        $data = 52;
        $this->assertEquals('Buzz', FizzBuzz::process($data));
    }

    public function testFizzBuzzContainsNumber()
    {
        $data = 53;
        $this->assertEquals('FizzBuzz', FizzBuzz::process($data));
    }

    public function testBang()
    {
        $data = 7;
        $this->assertEquals('Bang', FizzBuzz::process($data));
    }

    public function testBangContainsNumber()
    {
        $data = 17;
        $this->assertEquals('Bang', FizzBuzz::process($data));
    }

    public function testFizzBuzzBang()
    {
        $data = 105;
        $this->assertEquals('FizzBuzzBang', FizzBuzz::process($data));
    }

    public function testFizzBuzzBangContainsNumber()
    {
        $data = 357;
        $this->assertEquals('FizzBuzzBang', FizzBuzz::process($data));
    }

}
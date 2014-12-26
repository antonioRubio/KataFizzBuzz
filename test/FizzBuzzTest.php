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
}
<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
    }

    public function testAssert()
    {
        $this->assertInstanceOf('FizzBuzz', $this->fb);
    }

    public function testOne()
    {
        $data = 1;
        $this->assertEquals('1', $this->fb->process($data));
    }

    public function testFizz()
    {
        $data = 3;
        $this->assertEquals('Fizz', $this->fb->process($data));
    }

    public function testBuzz()
    {
        $data = 5;
        $this->assertEquals('Buzz', $this->fb->process($data));
    }

    public function testFizzBuzz()
    {
        $data = 15;
        $this->assertEquals('FizzBuzz', $this->fb->process($data));
    }

    public function testFizzContainsNumber()
    {
        $data = 31;
        $this->assertEquals('Fizz', $this->fb->process($data));
    }

    public function testBuzzContainsNumber()
    {
        $data = 52;
        $this->assertEquals('Buzz', $this->fb->process($data));
    }

    public function testFizzBuzzContainsNumber()
    {
        $data = 53;
        $this->assertEquals('FizzBuzz', $this->fb->process($data));
    }

    public function testBang()
    {
        $data = 7;
        $this->assertEquals('Bang', $this->fb->process($data));
    }

    public function testBangContainsNumber()
    {
        $data = 17;
        $this->assertEquals('Bang', $this->fb->process($data));
    }

    public function testFizzBuzzBang()
    {
        $data = 105;
        $this->assertEquals('FizzBuzzBang', $this->fb->process($data));
    }

    public function testFizzBuzzBangContainsNumber()
    {
        $data = 357;
        $this->assertEquals('FizzBuzzBang', $this->fb->process($data));
    }

}
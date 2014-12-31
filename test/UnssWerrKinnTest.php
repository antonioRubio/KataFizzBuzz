<?php

class UnssWerrKinnTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        FizzBuzz::setValueText(array(8 => 'Unss', 4 => 'Werr', 5 => 'Kinn'));
    }
    public function testAssert()
    {
        $uwk = new FizzBuzz();
        $this->assertInstanceOf('FizzBuzz', $uwk);
    }

    public function testOne()
    {
        $data = 1;
        $this->assertEquals('1', FizzBuzz::process($data));
    }

    public function testWerr()
    {
        $data = 4;
        $this->assertEquals('Werr', FizzBuzz::process($data));
    }

    public function testUnssWerr()
    {
        $data = 8;
        $this->assertEquals('UnssWerr', FizzBuzz::process($data));
    }

    public function testUnssWerrKinn()
    {
        $data = 40;
        $this->assertEquals('UnssWerrKinn', FizzBuzz::process($data));
    }

    public function testUnssWerrKinn2()
    {
        $data = 160;
        $this->assertEquals('UnssWerrKinn', FizzBuzz::process($data));
    }
}
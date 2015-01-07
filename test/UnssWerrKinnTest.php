<?php

class UnssWerrKinnTest extends PHPUnit_Framework_TestCase
{
    private static $valueText = array(8 => 'Unss', 4 => 'Werr', 5 => 'Kinn');
    protected $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
        $this->fb->setValueText(static::$valueText);
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

    public function testWerr()
    {
        $data = 4;
        $this->assertEquals('Werr', $this->fb->process($data));
    }

    public function testUnssWerr()
    {
        $data = 8;
        $this->assertEquals('UnssWerr', $this->fb->process($data));
    }

    public function testUnssWerrKinn()
    {
        $data = 40;
        $this->assertEquals('UnssWerrKinn', $this->fb->process($data));
    }

    public function testUnssWerrKinn2()
    {
        $data = 160;
        $this->assertEquals('UnssWerrKinn', $this->fb->process($data));
    }
}
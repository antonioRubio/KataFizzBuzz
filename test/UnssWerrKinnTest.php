<?php

class UnssWerrKinnTest extends PHPUnit_Framework_TestCase
{
    public function testAssert()
    {
        $uwk = new UnssWerrKinn();
        $this->assertInstanceOf('UnssWerrKinn', $uwk);
    }

    public function testOne()
    {
        $data = 1;
        $this->assertEquals('1', UnssWerrKinn::process($data));
    }

    public function testWerr()
    {
        $data = 4;
        $this->assertEquals('Werr', UnssWerrKinn::process($data));
    }

    public function testUnssWerr()
    {
        $data = 8;
        $this->assertEquals('UnssWerr', UnssWerrKinn::process($data));
    }

    public function testUnssWerrKinn()
    {
        $data = 40;
        $this->assertEquals('UnssWerrKinn', UnssWerrKinn::process($data));
    }

    public function testUnssWerrKinn2()
    {
        $data = 160;
        $this->assertEquals('UnssWerrKinn', UnssWerrKinn::process($data));
    }
}
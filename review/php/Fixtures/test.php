<?php

class OddEvenTest extends PHPUnit_Framework_TestCase
{
    private $number;

    protected function setUp()
    {
        $this->number = 2;
    }

    public function testOdd()
    {
        $this->number++;
        $this->assertNotEquals(0, $this->number % 2);
    }

    public function testEven()
    {
        $this->assertEquals(0, $this->number % 2);
    }

    protected function tearDown()
    {
        $this->number = null;
    }
}

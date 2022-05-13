<?php
use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testFailure()
    {
        $String = "Suriya";
        $this->assertIsString($String);
    }
}
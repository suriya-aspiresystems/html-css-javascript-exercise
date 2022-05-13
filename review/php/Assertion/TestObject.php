<?php
use PHPUnit\Framework\TestCase;

class ObjectTest extends TestCase
{
    public function testFailure()
    {
        $Object = (object) ('lovely laptop')
        $this->assertIsObject($Object);
    }
}
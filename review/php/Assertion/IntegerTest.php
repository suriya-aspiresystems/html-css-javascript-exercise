<?php
use PHPUnit\Framework\TestCase;

class IntegertTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsInt(null);
    }
}
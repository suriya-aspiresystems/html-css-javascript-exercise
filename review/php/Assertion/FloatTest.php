<?php
use PHPUnit\Framework\TestCase;

class FloatTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsFloat(1.933);
    }
}
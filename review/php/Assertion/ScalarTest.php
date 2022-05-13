<?php
use PHPUnit\Framework\TestCase;

class ScalarTest extends TestCase
{
    public function testFailure()
    {
        $actualValue = 420;
        $this->assertIsScalar($actualValue);
    }
}
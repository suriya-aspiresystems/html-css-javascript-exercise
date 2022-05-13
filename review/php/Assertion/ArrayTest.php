<?php
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsArray([1,2,3,4]);
    }
}
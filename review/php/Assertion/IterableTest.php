<?php
use PHPUnit\Framework\TestCase;

class IterableTest extends TestCase
{
    public function testFailure()
    {
        $variable = [1, 2, 3];
        $this->assertIsIterable($variable);
    }

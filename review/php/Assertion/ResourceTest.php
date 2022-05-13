<?php
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    public function testFailure()
    {
        $variable =  fopen('http://www.google.com','r');
        $this->assertIsResource($variable);
    }
}
<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EqualsIgnoringCaseTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEqualsIgnoringCase('foo', 'Foo');
    }
}
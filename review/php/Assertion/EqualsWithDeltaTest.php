<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EqualsWithDeltaTest extends TestCase
{
    public function testFailure()
    {
        $this->assertEqualsWithDelta(1.0, 1.0, 1.0);
    }
}
<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FalseTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertFalse(true);
    }
}
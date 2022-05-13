<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class GreatThanOrEqualTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertGreaterThanOrEqual(2, 3);
    }
}
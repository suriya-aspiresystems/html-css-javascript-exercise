<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertContainsOnly extends TestCase
{
    public function testFailure(): void
    {
        $this->assertContainsOnly('string', ['suriya', 'narayan', 'venky']);
    }
}

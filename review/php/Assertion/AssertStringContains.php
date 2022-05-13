<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertStringContains extends TestCase
{
    public function testFailure(): void
    {
        $this->assertStringContainsString('suriya', 'suriyanarayan');
    }
}

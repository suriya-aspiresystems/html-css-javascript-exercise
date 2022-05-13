<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertStringContainsIgnoringCase extends TestCase
{
    public function testFailure(): void
    {
        $this->assertStringContainsStringIgnoringCase('suriya', 'Suriyanarayan');
    }
}

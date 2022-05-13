<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RegExpTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertMatchesRegularExpression('/foo/', '/foo/');
    }
}
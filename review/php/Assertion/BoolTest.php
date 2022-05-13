<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class BoolTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertIsBool(true);
    }
}
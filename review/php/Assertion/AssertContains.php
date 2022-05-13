<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertContains extends TestCase
{
    public function testFailure()
    {
        $this->assertContains(5, [1, 2, 3]);
    }
}

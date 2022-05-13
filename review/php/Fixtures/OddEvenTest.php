<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class OddEvenTest extends TestCase
{
    private $number;

    protected function setUp(): void
    {
        $this->number = 2;
    }

    public function testOdd(): void
    {
        $this->number++;
        $this->assertNotEquals(0, $this->number % 2);
    }

    public function testEven(): void
    {
        $this->assertEquals(0, $this->number % 2);
    }

    protected function tearDown(): void
    {
        $this->number = null;
    }
}

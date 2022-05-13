<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class JsonFileEqualsJsonFileTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertJsonFileEqualsJsonFile(
          '/var/www/html/php/Assertion/sample.json', '/var/www/html/php/Assertion/Actual.json');
    }
}

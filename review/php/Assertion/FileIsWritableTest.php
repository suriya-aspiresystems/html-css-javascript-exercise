<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FileIsWritableTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertFileIsWritable('/var/www/html/php/Assertion/FileEqualsTest.php', '/var/www/html/php/Assertion/FileEqualsTest.php');
    }
}
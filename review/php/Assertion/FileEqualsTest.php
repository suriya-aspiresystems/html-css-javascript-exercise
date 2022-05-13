<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FileEqualsTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertFileEquals('/var/www/html/php/Assertion/FileEqualsTest.php', '/var/www/html/php/Assertion/FileEqualsTest.php');
    }
}
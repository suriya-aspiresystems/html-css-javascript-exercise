<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class IsReadableTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertIsReadable('/var/www/html/php/StringTest.php');
    }
}
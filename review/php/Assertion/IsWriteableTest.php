<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class IsWriteableTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertIsWritable('/var/www/html/php/StringTest.php');
    }
}
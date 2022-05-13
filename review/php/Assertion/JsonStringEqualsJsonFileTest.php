<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class JsonStringEqualsJsonFileTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertJsonStringEqualsJsonFile(
            '/var/www/html/php/Assertion/Actual.json', json_encode(["name" => "Molecule Man"])
        );
    }
}

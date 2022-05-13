<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class XMLFileEqualsXMLFileTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertXmlFileEqualsXmlFile(
          '/var/www/html/php/Assertion/expected.xml', '/var/www/html/php/Assertion/actual.xml');
    }
}

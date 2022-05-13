<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class XmlStringEqualsXmlFileTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertXmlStringEqualsXmlFile(
          '/var/www/html/php/Assertion/Expect.xml', '<foo><baz></baz></foo>');
    }
}

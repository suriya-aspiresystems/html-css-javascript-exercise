<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class InstanceOfTest extends TestCase
{
    public function testFailure(): void
    {
          
        $foo = new Foo();
        $bar = new Bar();

        // this would pass
        $this->assertInstanceOf("Foo",$foo);
      }
}
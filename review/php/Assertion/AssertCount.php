<?php
use PHPUnit\Framework\TestCase;
 
class Foo {
    public function dummyFunction(){return true;}
}
 
class Bar {
    public function dummyFunction(){return true;}
}
 
class AssertCount extends TestCase
{
    public function testNegativeTestcaseForAssertContainsOnlyInstancesOf()
    {
        // Assert function to test whether testArray contains
        // only instance of Foo or not
        $this->assertContainsOnlyInstancesOf(
            Foo::class,
            [new Foo],
            Bar::class,
            [new Bar],
            "testArray contains only instance of Foo"
        );
    }
}
 
?>

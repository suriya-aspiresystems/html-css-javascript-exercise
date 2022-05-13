<?php
use PHPUnit\Framework\TestCase;
  
class CanonicalEqual extends TestCase
{
    public function testPositiveTestcase()
    {
         $expected = array(1, 2, 3, 4);
        $actual = array(2, 1, 3, 4);
  
        // Assert function to test whether expected 
        // and actual are canonically equal or not.
        $this->assertEqualsCanonicalizing(
            $expected, $actual, 
            "expected and actual are not canonically equals"
        );
    }
}
  
?>

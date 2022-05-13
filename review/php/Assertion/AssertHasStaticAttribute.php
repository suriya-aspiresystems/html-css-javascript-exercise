<?php
use PHPUnit\Framework\TestCase;
  
// test class
Class testClass{
    public static $data = "test attribute";
}
  
class AssertHasStaticAttribute extends TestCase
{
    public function testPositiveTestcaseForClassHasAttribute()
    {
        $this->assertClassHasAttribute('data', "testClass", "testClass doesn't has data as static attribute") ;
    }
}
  
?>

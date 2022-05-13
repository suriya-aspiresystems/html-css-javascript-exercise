
<?php
use PHPUnit\Framework\TestCase;
  
// test class
Class testClass{
    public $data = "test attribute";
}
  
class AssertHasAttribute extends TestCase
{
    public function testPositiveTestcaseForClassHasAttribute()
    {
        $this->assertClassHasAttribute('data', "testClass", "testClass doesn't has data as attribute") ;
    }
}
  
?>

<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertHasAttribute extends TestCase{
        public $data = "Suriya";
        
        public function Attribute(){
             $this->assertClassHasAttribute('data' , "TestCase", "Test Case does not has geeks has Attribute");
             
} 

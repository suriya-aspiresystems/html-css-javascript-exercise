<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ArrayHasKey extends TestCase{
     public function test(){
        $this->assertArrayHasKey('suriya',['suriya'=>1]);
     }
}


?>

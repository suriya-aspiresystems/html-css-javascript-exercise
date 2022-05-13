<?php
use PHPUnit\Framework\TestCase;
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

class CallableTest extends TestCase
{
    public function testFailure()
    {
        $this->assertIsCallable(call_user_func('my_callback_function'));
    }
}
<?php

namespace Jxlwqq\HelloWorld\Test;

use Jxlwqq\HelloWorld\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSay()
    {
        $hello_world = new HelloWorld();
        $this->assertEquals('Hello World', $hello_world->say());
    }
}

<?php

use Foo\Foo;

class Test_PhpunitTest extends PHPUnit_Framework_TestCase
{
    public function testPhpunit()
    {
        $this->assertTrue(true, 'assert true');
    }

    public function testFooCall()
    {
        $this->assertEquals("Foo", (new Foo())->call());
    }
}

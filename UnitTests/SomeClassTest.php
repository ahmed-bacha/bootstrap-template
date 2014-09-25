<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        $sm = new SomeClass();

        $this->assertEquals('foo', $sm->doSomething());
    }


    public function testLessThenTen()
    {
        $sm = new SomeClass();
        $this->assertEquals(true, $sm->lessThenTen(5));
    }

}
?>
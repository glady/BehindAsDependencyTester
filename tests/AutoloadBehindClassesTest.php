<?php
class AutoloadBehindClassesTest extends PHPUnit_Framework_TestCase
{
    public function testBehindClassExists()
    {
        $this->assertTrue(class_exists('\glady\Behind'));
    }
}

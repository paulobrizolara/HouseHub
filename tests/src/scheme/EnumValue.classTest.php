<?php

namespace househub\scheme;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 11:44:28.
 */
class EnumValueTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var EnumValue
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new EnumValue(array("valor1","valor2"));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * househub\scheme\EnumValue::isValid
     */
    public function testIsValid() {
        $this->assertTrue($this->object->isValid("valor1"));
    }
    /**
     * househub\scheme\EnumValue::isValid
     */
    public function testIsNotValid() {
        $this->assertFalse($this->object->isValid("valorDesconhecido"));
    }

}

<?php

namespace househub\scheme;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 10:48:55.
 */
class SchemePropertyTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SchemeProperty
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new SchemeProperty("id", "/configs/id");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     *  househub\scheme\SchemeProperty::setName
     */
    public function testSetName() {
        $newName = "NewName";
        $this->object->setName($newName);
        $this->assertEquals($newName, $this->object->getName());
        
    }

    /**
     *  househub\scheme\SchemeProperty::setPath
     */
    public function testSetPath() {
        $newPath = "/new/path";
        $this->object->setPath($newPath);
        $this->assertEquals($newPath, $this->object->getPath());
    }

    /**
     *  househub\scheme\SchemeProperty::setType
     */
    public function testSetType() {
        $newType = "NewType";
        $this->object->setType($newType);
        $this->assertEquals($newType, $this->object->getType());
    }

    /**
     *  househub\scheme\SchemeProperty::setAllowedValues
     */
    public function testSetAllowedValues() {
        $newAllowed = array(new EnumValue(array("valorValido")));
        $this->object->setAllowedValues($newAllowed);
        $this->assertEquals($newAllowed, $this->object->getAllowedValues());
    }

    /**
     *  househub\scheme\SchemeProperty::setReadOnly
     */
    public function testSetReadOnly() {
        $readOnly = true;
        $this->object->setReadOnly($readOnly);
        $this->assertEquals($readOnly, $this->object->isReadOnly());
    }

}

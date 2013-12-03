<?php

namespace househub\users;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 14:21:46.
 */
class UserVisualTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var UserVisual
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new UserVisual;
        $this->object->setId(1);
        $this->object->setImageId(2);
        $this->object->setSetDate('2013-01-01 00:00:00');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers househub\users\UserVisual::getId
     * @todo   Implement testGetId().
     */
    public function testGetId() {
        $this->assertEquals(1, $this->object->getId());
    }

    /**
     * @covers househub\users\UserVisual::getImageId
     * @todo   Implement testGetImageId().
     */
    public function testGetImageId() {
        $this->assertEquals(2, $this->object->getImageId());
    }

    /**
     * @covers househub\users\UserVisual::getSetDate
     * @todo   Implement testGetSetDate().
     */
    public function testGetSetDate() {
        $this->assertEquals('2013-01-01 00:00:00', $this->object->getSetDate());
    }

    /**
     * @covers househub\users\UserVisual::setId
     * @todo   Implement testSetId().
     */
    public function testSetId() {
        $this->object->setId(2);
        $this->assertEquals(2, $this->object->getId());
    }

    /**
     * @covers househub\users\UserVisual::setImageId
     * @todo   Implement testSetImageId().
     */
    public function testSetImageId() {
        $this->object->setImageId(3);
        $this->assertEquals(3, $this->object->getImageId());
    }

    /**
     * @covers househub\users\UserVisual::setSetDate
     * @todo   Implement testSetSetDate().
     */
    public function testSetSetDate() {
        $this->object->setSetDate('2000-01-01 00:00:00');
        $this->assertEquals('2000-01-01 00:00:00', $this->object->getSetDate());
    }

}

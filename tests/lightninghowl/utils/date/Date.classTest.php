<?php

namespace lightninghowl\utils\date;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-28 at 09:48:25.
 */
class DateTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Date
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Date('2000-02-01 12:30:00');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * lightninghowl\utils\date\Date::getDay
     * @todo   Implement testGetDay().
     */
    public function testGetDay() {
        $this->assertEquals('01', $this->object->getDay());
    }

    /**
     * lightninghowl\utils\date\Date::getMouth
     * @todo   Implement testGetMouth().
     */
    public function testGetMouth() {
        $this->assertEquals('02', $this->object->getMouth());
    }

    /**
     * lightninghowl\utils\date\Date::getYear
     * @todo   Implement testGetYear().
     */
    public function testGetYear() {
        $this->assertEquals('2000', $this->object->getYear());
    }

    /**
     * lightninghowl\utils\date\Date::getHours
     * @todo   Implement testGetHours().
     */
    public function testGetHours() {
        $this->assertEquals('12', $this->object->getHours());
    }

    /**
     * lightninghowl\utils\date\Date::getMinutes
     * @todo   Implement testGetMinutes().
     */
    public function testGetMinutes() {
        $this->assertEquals('30', $this->object->getMinutes());
    }

    /**
     * lightninghowl\utils\date\Date::getSeconds
     * @todo   Implement testGetSeconds().
     */
    public function testGetSeconds() {
        $this->assertEquals('00', $this->object->getSeconds());
    }

    /**
     * @depends testGetDay
     * lightninghowl\utils\date\Date::setDay
     * @todo   Implement testSetDay().
     */
    public function testSetDay() {
        $this->object->setDay(10);
        $this->assertEquals(10, $this->object->getDay());
    }

    /**
     * @depends testGetMouth
     * lightninghowl\utils\date\Date::setMouth
     * @todo   Implement testSetMouth().
     */
    public function testSetMouth() {
        $this->object->setMouth(10);
        $this->assertEquals(10, $this->object->getMouth());
    }

    /**
     * @depends testGetYear
     * lightninghowl\utils\date\Date::setYear
     * @todo   Implement testSetYear().
     */
    public function testSetYear() {
        $this->object->setYear(2013);
        $this->assertEquals(2013, $this->object->getYear());
    }

    /**
     * @depends testGetHours
     * lightninghowl\utils\date\Date::setHours
     * @todo   Implement testSetHours().
     */
    public function testSetHours() {
        $this->object->setHours(10);
        $this->assertEquals(10, $this->object->getHours());
    }

    /**
     * @depends testGetMinutes
     * lightninghowl\utils\date\Date::setMinutes
     * @todo   Implement testSetMinutes().
     */
    public function testSetMinutes() {
        $this->object->setMinutes(10);
        $this->assertEquals(10, $this->object->getMinutes());
    }

    /**
     * @depends testGetSeconds
     * lightninghowl\utils\date\Date::setSeconds
     * @todo   Implement testSetSeconds().
     */
    public function testSetSeconds() {
        $this->object->setSeconds(10);
        $this->assertEquals(10, $this->object->getSeconds());
    }

}

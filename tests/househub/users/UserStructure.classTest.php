<?php

namespace househub\users;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 07:47:04.
 */
class UserStructureTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var UserStructure
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new UserStructure;
        $this->object->setId(1);
        $this->object->setGender('M');
        $this->object->setName('Foo');
        $this->object->setNickname('Bar');
        $this->object->setPassword('Pass');
        $this->object->setRegistrationDate('2012-02-01 00:00:00');
        $this->object->setUsername('User');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     *  househub\users\UserStructure::getId
     * @todo   Implement testGetId().
     */
    public function testGetId() {
        $this->assertEquals(1, $this->object->getId());
    }

    /**
     *  househub\users\UserStructure::getName
     * @todo   Implement testGetName().
     */
    public function testGetName() {
        $this->assertEquals('Foo', $this->object->getName());
    }

    /**
     *  househub\users\UserStructure::getNickname
     * @todo   Implement testGetNickname().
     */
    public function testGetNickname() {
        $this->assertEquals('Bar', $this->object->getNickname());
    }

    /**
     *  househub\users\UserStructure::getGender
     * @todo   Implement testGetGender().
     */
    public function testGetGender() {
        $this->assertEquals('M', $this->object->getGender());
    }

    /**
     *  househub\users\UserStructure::getUsername
     * @todo   Implement testGetUsername().
     */
    public function testGetUsername() {
        $this->assertEquals('User', $this->object->getUsername());
    }

    /**
     *  househub\users\UserStructure::getPassword
     * @todo   Implement testGetPassword().
     */
    public function testGetPassword() {
        $this->assertEquals('Pass', $this->object->getPassword());
    }

    /**
     *  househub\users\UserStructure::getRegistrationDate
     * @todo   Implement testGetRegistrationDate().
     */
    public function testGetRegistrationDate() {
        $this->assertEquals('2012-02-01 00:00:00', $this->object->getRegistrationDate());
    }

    /**
     *  househub\users\UserStructure::setId
     * @todo   Implement testSetId().
     */
    public function testSetId() {
        $this->object->setId(2);
        $this->assertEquals(2, $this->object->getId());
    }

    /**
     *  househub\users\UserStructure::setName
     * @todo   Implement testSetName().
     */
    public function testSetName() {
        $this->object->setName('Bar');
        $this->assertEquals('Bar', $this->object->getName());
    }

    /**
     *  househub\users\UserStructure::setNickname
     * @todo   Implement testSetNickname().
     */
    public function testSetNickname() {
        $this->object->setNickname('Lorem');
        $this->assertEquals('Lorem', $this->object->getNickname());
    }

    /**
     *  househub\users\UserStructure::setGender
     * @todo   Implement testSetGender().
     */
    public function testSetGender() {
        $this->object->setGender('F');
    $this->assertEquals('F', $this->object->getGender());
    }

    /**
     *  househub\users\UserStructure::setUsername
     * @todo   Implement testSetUsername().
     */
    public function testSetUsername() {
        $this->object->setUsername('myUser');
        $this->assertEquals('myUser', $this->object->getUsername());
    }

    /**
     *  househub\users\UserStructure::setPassword
     * @todo   Implement testSetPassword().
     */
    public function testSetPassword() {
        $this->object->setPassword('myPass');
        $this->assertEquals('myPass', $this->object->getPassword());
    }

    /**
     *  househub\users\UserStructure::setRegistrationDate
     * @todo   Implement testSetRegistrationDate().
     */
    public function testSetRegistrationDate() {
        $this->object->setRegistrationDate('2011-01-01 00:00:00');
        $this->assertEquals('2011-01-01 00:00:00', $this->object->getRegistrationDate());
    }

}

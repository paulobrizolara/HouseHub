<?php

namespace househub\scheme;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 10:43:13.
 */
class SchemeJsonFileReaderTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SchemeJsonFileReader
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new SchemeJsonFileReader("");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     *  househub\scheme\SchemeJsonFileReader::getFilepath
     */
    public function testGetFilepath() {
        $this->assertEmpty($this->object->getFilepath());
    }

    /**
     *  househub\scheme\SchemeJsonFileReader::setFilepath
     * @todo   Implement testSetFilepath().
     */
    public function testSetFilepath() {
        $this->object->setFilepath(__DIR__);
        $this->assertEquals(__DIR__,$this->object->getFilepath());
    }

    /**
     *  househub\scheme\SchemeJsonFileReader::getScheme
     */
    public function testGetScheme() {
        $scheme = $this->object->getScheme(NULL);
        $this->assertNull($scheme);
    }

}
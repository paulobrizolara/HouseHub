<?php

namespace househub\scheme;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-02 at 21:55:40.
 */
class SchemeParserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SchemeParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new SchemeParser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * househub\scheme\SchemeParser::getInstance
     */
    public function testGetInstance() {
        $this->assertNotNull(SchemeParser::getInstance());
    }

    /**
     * househub\scheme\SchemeParser::convertToScheme
     */
    public function testConvertToSchemeNull() {
        // Remove the following lines when you implement this test.
        $scheme = $this->object->convertToScheme(null);
        $this->assertNull($scheme);
    }
    /**
     * househub\scheme\SchemeParser::convertToScheme
     */
    public function testConvertToSchemeEmpty() {
        // Remove the following lines when you implement this test.
        $scheme = $this->object->convertToScheme("");
        $this->assertNull($scheme);
    }

}
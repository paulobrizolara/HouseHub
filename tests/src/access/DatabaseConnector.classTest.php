<?php

namespace househub\access;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 10:22:24.
 */
class DatabaseConnectorTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
    }

    protected function tearDown() {
        
    }

    /**
     * househub\access\DatabaseConnector::getDriver
     */
    public function testGetDriver() {
        $driver = DatabaseConnector::getDriver();
        $this->assertNotNull($driver);
    }

}
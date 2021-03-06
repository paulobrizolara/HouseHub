<?php

namespace lightninghowl\database;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-28 at 07:31:28.
 */
class DbDriverTest extends \PHPUnit_Framework_TestCase {

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    /**
     * lightninghowl\database\DbDriver::open
     */
    public function testOpen() {
//        $pdo = DbDriver::open($argument);
        $pdo = \househub\access\DatabaseConnector::getDriver(); //testa indiretamente o DbDriver::open
        $this->assertNotNull($pdo);

        $this->assertInstanceOf('PDO', $pdo);
    }

}

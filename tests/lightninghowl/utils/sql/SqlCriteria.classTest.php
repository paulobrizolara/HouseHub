<?php

namespace lightninghowl\utils\sql;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 07:31:48.
 */
class SqlCriteriaTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SqlCriteria
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new SqlCriteria;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    public function testAdd() {
        $this->object->add(new SqlFilter('id', '=', 1));
        $this->assertEquals('(id = 1)', $this->object->dump());
    }

    public function testDump() {
        $object = new SqlCriteria();
        $object->setBlockStatus('limit', 1);
        $object->add(new SqlFilter('object', '=', 3));
        $this->assertEquals('(object = 3)', $object->dump());
    }

    public function testDump1() {
        $this->assertEquals('', $this->object->dump());
    }
    
    public function testSetBlockStatus() {
        $this->object->setBlockStatus('LIMIT', 1);
        $this->object->setBlockStatus('order');
        $int = $this->object->getProperty('LIMIT');
        $this->assertEquals(1, $int);
        $this->assertEquals(null, $this->object->getProperty('order'));
    }

    public function testGetProperty() {
        $this->object->setBlockStatus('limit', 1);
        $int = $this->object->getProperty('limit');
        $this->assertEquals(1, $int);
        $this->assertEquals(null, $this->object->getProperty('order'));
    }

}

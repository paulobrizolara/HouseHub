<?php

namespace lightninghowl\utils\sql;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 07:18:58.
 */
class OuterJoinTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var OuterJoin
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new OuterJoin();
        $this->object->setSide(OuterJoin::LEFT);
        $this->object->setEntity('entity');
        $criteria = new SqlCriteria();
        $criteria->add(new EntityFilter('t.id', '=', 'u.id'));
        $this->object->setCriteria($criteria);
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers lightninghowl\utils\sql\OuterJoin::setSide
     * @todo   Implement testSetSide().
     */
    public function testSetSide() {
        $this->object->setSide(OuterJoin::RIGHT);
        $this->assertEquals('RIGHT OUTER JOIN entity ON (t.id = u.id)', $this->object->dump());
    }

    /**
     * @covers lightninghowl\utils\sql\OuterJoin::dump
     * @todo   Implement testDump().
     */
    public function testDump() {
        $this->assertEquals('LEFT OUTER JOIN entity ON (t.id = u.id)', $this->object->dump());
    }

}

<?php

namespace lightninghowl\utils\encrypting;

require_once realpath(dirname(__FILE__).'/../../../../lightninghowl/utils/AutoLoader.class.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-28 at 10:22:53.
 */
class Md5HashTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Md5Hash
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Md5Hash;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers lightninghowl\utils\encrypting\Md5Hash::encrypt
     * @todo   Implement testEncrypt().
     */
    public function testEncrypt() {
        $this->assertEquals(md5('test'), $this->object->encrypt('test'));
    }

}

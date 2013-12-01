<?php

namespace lightninghowl\utils\encrypting;

require_once realpath(dirname(__FILE__).'/../../../../lightninghowl/utils/AutoLoader.class.php');

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-28 at 10:23:00.
 */
class Sha1HashTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Sha1Hash
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Sha1Hash;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers lightninghowl\utils\encrypting\Sha1Hash::encrypt
     * @todo   Implement testEncrypt().
     */
    public function testEncrypt() {
        $this->assertEquals(sha1('test'), $this->object->encrypt('test'));
    }

}

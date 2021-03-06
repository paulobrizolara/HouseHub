<?php

namespace househub\scheme;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-02 at 21:58:12.
 */
class SchemeLoaderTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SchemeLoader
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new SchemeLoader;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    /**
     */
    public function testAddSchemeReader() {
        $d = DIRECTORY_SEPARATOR;
        $rootDir = __DIR__ . $d . "..". $d . "..". $d . ".." . $d;
        $directory =  realpath($rootDir . $d . "files" . $d . "schemes");
        
        $jsonReader = new SchemeJsonFileReader($directory);
        $localJsonReader = new SchemeJsonFileReader(__DIR__);
        
        $this->object->addSchemeReader($jsonReader);
        $this->object->addSchemeReader($localJsonReader);
        $this->assertContains($jsonReader, $this->object->getReaders());
        return $this->object;
    }

    /**
     * @depends testAddSchemeReader
     */
    public function testLoadScheme(SchemeLoader $schemeLoader) {
        $scheme = $schemeLoader->loadScheme("basicDoor");
        $this->assertNotNull($scheme);
        $this->assertInstanceOf('\househub\scheme\Scheme',$scheme);
    }
    /**
     * @depends testAddSchemeReader
     */
    public function testLoadScheme2(SchemeLoader $schemeLoader) {
        $scheme = $schemeLoader->loadScheme("schemeTest");
        $this->assertNotNull($scheme);
        $this->assertInstanceOf('\househub\scheme\Scheme',$scheme);
    }
    /**
     * @depends testAddSchemeReader
     */
    public function testLoadNullScheme(SchemeLoader $schemeLoader) {
        $scheme = $schemeLoader->loadScheme("EsquemaInexistente");
        $this->assertNull($scheme);
    }

}

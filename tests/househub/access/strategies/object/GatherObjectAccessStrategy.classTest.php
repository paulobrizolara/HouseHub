<?php

namespace househub\access\strategies\object;

//require_once(__DIR__ . ".." . DIRECTORY_SEPARATOR . "LoginHelper");


use househub\access\DatabaseConnector;
use househub\objects\home\HomeObject;
use househub\objects\home\HomeObjectManager;
use househub\objects\ObjectStructure;
use PDO;
use tests\househub\access\strategies\LoginHelper;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-04 at 20:40:30.
 */
class GatherObjectAccessStrategyTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var GatherObjectAccessStrategy
     */
    protected $object;
     /** @var PDO
     */
    protected $pdo;
     /** @var LoginHelper
     */
    protected $loginHelper;

    protected function setUp() {
        $this->pdo = DatabaseConnector::getDriver();
        $this->pdo->beginTransaction();
        
        $this->object = new GatherObjectAccessStrategy();
        $this->loginHelper = new LoginHelper();
    }
    
    protected function tearDown() {
        $this->pdo->rollBack();
    }

    /**
     *  househub\access\strategies\object\GatherObjectAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccess() {
        $this->loginHelper->doLogin();
        $homeObject = $this->insertNewObject();
        $answer = $this->object->requestAccess(
                array(GatherObjectAccessStrategy::OBJECT_ARG => $homeObject->getId())
        );
        
        $this->assertEquals(1, $answer->getStatus());
        $this->assertEquals("@success", $answer->getMessage());
    }
    /**
     *  househub\access\strategies\object\GatherObjectAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccessNoLogin() {
        $homeObject = $this->insertNewObject();
        $answer = $this->object->requestAccess(
                array(GatherObjectAccessStrategy::OBJECT_ARG => $homeObject->getId())
        );
        
        $this->assertEquals(0, $answer->getStatus());
        $this->assertEquals("@user_needs_login", $answer->getMessage());
    }
    /**
     *  househub\access\strategies\object\GatherObjectAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccessInexistentObject() {
        $this->loginHelper->doLogin();
        $answer = $this->object->requestAccess(
                array(GatherObjectAccessStrategy::OBJECT_ARG => 23)
        );
        
        $this->assertEquals(0, $answer->getStatus());
//        $this->assertEquals('@gather_object_error_2', $answer->getMessage());
    }

    public function insertNewObject(){
        $homeObject = $this->makeObject();
        $homeManager = new HomeObjectManager();
        $homeManager->saveObject($homeObject, $this->pdo);
        return $homeObject;
    }
    
    public function makeObject(){
        $homeObj = new HomeObject();
        $homeObj->setStructure($this->makeStructure());
        return $homeObj;
    }
    
    /**
     * @return ObjectStructure
     */
    private function makeStructure(){
        $structure = new ObjectStructure();
        $structure->setAddress("http://192.168.0.100");
        $structure->setSchemeName("basicDoor");
        $structure->setConnected(false);
        $structure->setType("door");
        
        return $structure;
    }
}

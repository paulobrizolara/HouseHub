<?php

namespace househub\access\strategies\groups;

require_once( __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "GroupMakerHelper.php");

use househub\access\DatabaseConnector;
use PDO;
use tests\househub\access\strategies\GroupMakerHelper;
use tests\househub\access\strategies\LoginHelper;
use tests\househub\access\strategies\ObjectMakerHelper;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-05 at 04:49:57.
 */
class UpdateGroupAccessStrategyTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var UpdateGroupAccessStrategy
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
        
        $this->object = new UpdateGroupAccessStrategy($this->pdo);
        $this->loginHelper = new LoginHelper();
    }
    
    protected function tearDown() {
        $this->pdo->rollBack();
    }

    /**
     * househub\access\strategies\groups\UpdateGroupAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccessNoLogin() {
        // Remove the following lines when you implement this test.
        $answer  = $this->object->requestAccess(array());
        $this->assertEquals(0,$answer->getStatus());
        $this->assertEquals('@user_needs_login',$answer->getMessage());
    }
    /**
     * househub\access\strategies\groups\UpdateGroupAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccessBadParameters() {
        $this->loginHelper->doLogin();
        $answer  = $this->object->requestAccess(array());
        $this->assertEquals(0,$answer->getStatus());
        $this->assertEquals('@bad_parameters',$answer->getMessage());
    }
    /**
     * househub\access\strategies\groups\UpdateGroupAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccessGroup() {
        $this->loginHelper->doLogin();
        $answer  = $this->object->requestAccess(
                array(
                    UpdateGroupAccessStrategy::GROUP_ARG => 1
                )
        );
        $this->assertEquals(0,$answer->getStatus());
        $this->assertEquals('@group_not_found',$answer->getMessage());
    }
    
    /**
     * househub\access\strategies\groups\UpdateGroupAccessStrategy::requestAccess
     * @group cookie
     */
    public function testRequestAccess() {
        $homeGroup = GroupMakerHelper::insertNewHomeGroup($this->pdo);
        $newObj = ObjectMakerHelper::insertNewObject($this->pdo);
        
        $this->loginHelper->doLogin();
        
        $answer  = $this->object->requestAccess(
                array(
                    UpdateGroupAccessStrategy::GROUP_ARG => $homeGroup->getStructure()->getId(),
                    UpdateGroupAccessStrategy::GROUPNAME_ARG => "newGroupName",
                    UpdateGroupAccessStrategy::OBJECTS_ARG => array($newObj->getId())
                )
        );
        
        $this->assertEquals(1,$answer->getStatus());
        $this->assertEquals('@success',$answer->getMessage());
    }

}

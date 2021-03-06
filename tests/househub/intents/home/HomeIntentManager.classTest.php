<?php

namespace househub\intents\home;

use househub\access\DatabaseConnector;
use househub\intents\IntentStructure;
use PDO;
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 10:35:17.
 */
class HomeIntentManagerTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var HomeIntentManager
     */
    protected $object;
    
    /**
     * @var PDO
     */
    protected $pdo;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new HomeIntentManager;
        $this->pdo = DatabaseConnector::getDriver();
        $this->pdo->beginTransaction();
    }
    
    protected function tearDown() {
        $this->pdo->rollBack();
    }
    
    /**
     *  househub\intents\home\HomeIntentManager::loadIntent
     * @todo   Implement testLoadIntent().
     */
    public function testLoadIntent() {
        $this->pdo->exec("DELETE FROM objects_intents"); 
        $this->pdo->exec("INSERT INTO objects_intents (id, type, address, scheme_name, request_date) "
                . "VALUES (23, 'doorInserted', 'http://192.168.0.23', 'basicDoor', '2013-12-03 14:23:32')");
        
        $intent = $this->object->loadIntent(23, $this->pdo);
        
        $this->assertInstanceOf("househub\\intents\\home\\HomeIntent", $intent);
        
        $intentStructure = $intent->getStructure();
        $this->assertEquals(23,$intentStructure->getId());
    }

    /**
     *  househub\intents\home\HomeIntentManager::loadStructure
     */
    public function testLoadStructure() {
        $this->pdo->exec("DELETE FROM objects_intents"); 
        $this->pdo->exec("INSERT INTO objects_intents (id, type, address, scheme_name, request_date) "
                . "VALUES (23, 'doorInserted', 'http://192.168.0.23', 'basicDoor', '2013-12-03 14:23:32')");
        
        $intentStructure = $this->object->loadStructure(23, $this->pdo);
        
        $this->assertInstanceOf("househub\\intents\\IntentStructure", $intentStructure);
        $this->assertEquals(23,$intentStructure->getId());
    }

    /**
     *  househub\intents\home\HomeIntentManager::loadSubIntents
     */
    public function testLoadSubIntents() {
        $this->pdo->exec("DELETE FROM objects_intents"); 
        $this->pdo->exec("INSERT INTO objects_intents (id, type, address, scheme_name, request_date) "
                . "VALUES (23, 'doorInserted', 'http://192.168.0.23', 'basicDoor', '2013-12-03 14:23:32')");
        
        $subIntents = $this->object->loadSubIntents(23, $this->pdo);
        $this->assertEmpty($subIntents);
    }

    /**
     *  househub\intents\home\HomeIntentManager::saveIntent
     * @todo   Implement testSaveIntent().
     */
    public function testSaveIntent() {
        $intent = new HomeIntent();
        $intentStructure = new IntentStructure();
        
        $intentStructure->setAddress("http://192.168.1.200");
        $intentStructure->setSchemeName("basicLamp");
        $intentStructure->setType("lamp");
        $intent->setStructure($intentStructure);
        
        $savedIntent  = $this->object->saveIntent($intent, $this->pdo);
        $loadedIntent = $this->object->loadIntent($savedIntent->getStructure()->getId(), $this->pdo);
        $loadedStructure = $loadedIntent->getStructure();
        
        $this->assertEquals($intentStructure->getAddress(),$loadedStructure->getAddress());
        $this->assertEquals($intentStructure->getSchemeName(),$loadedStructure->getSchemeName());
        $this->assertEquals($intentStructure->getType(),$loadedStructure->getType());
    }

    /**
     *  househub\intents\home\HomeIntentManager::deleteIntent
     * @todo   Implement testDeleteIntent().
     */
    public function testDeleteIntent() {
        $intent = new HomeIntent();
        $intentStructure = new IntentStructure();
        
        $intentStructure->setAddress("http://192.168.1.200");
        $intentStructure->setSchemeName("basicLamp");
        $intentStructure->setType("lamp");
        $intent->setStructure($intentStructure);
        
        $savedIntent  = $this->object->saveIntent($intent, $this->pdo);
        $this->object->deleteIntent($savedIntent, $this->pdo);
        $loadedIntent = $this->object->loadIntent($savedIntent->getStructure()->getId(), $this->pdo);
        $this->assertNull($loadedIntent);
    }

}

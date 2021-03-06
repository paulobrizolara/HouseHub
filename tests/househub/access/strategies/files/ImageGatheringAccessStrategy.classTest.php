<?php

namespace househub\access\strategies\files;

$d = DIRECTORY_SEPARATOR;
require_once(__DIR__ . $d . ".." . $d  . "LoginHelper.class.php");

use tests\househub\access\strategies\LoginHelper;

use househub\access\DatabaseConnector;
use househub\images\ImageStructure;
use PDO;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-01 at 20:49:12.
 */
class ImageGatheringAccessStrategyTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ImageGatheringAccessStrategy
     */
    protected $object;

    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * @var LoginHelper
     */
    protected $loginHelper; 
    
    protected $images;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ImageGatheringAccessStrategy();
        $this->pdo = DatabaseConnector::getDriver();
        $this->pdo->beginTransaction();

        $this->loginHelper = new LoginHelper();
        
        $this->images = array();
        $imgStructure = new ImageStructure();
        $imgStructure->setName("img");
        $imgStructure->setUserId(0);
        
        $d = DIRECTORY_SEPARATOR;
        $path = __DIR__ . $d . "testImage.png";
        
        $imgStructure->setResource($path);
        $this->images[0] = $imgStructure;
    }

    protected function tearDown() {

        $this->pdo->rollBack();
    }

    /**
     * @group cookie
     */
    public function testRequestAccess() {
        $imageDAO = new \househub\images\dao\ImageStructureDAO($this->pdo);
        $imgId = $imageDAO->insert($this->images[0]);
        $this->loginHelper->doLogin();
        
        $answer = $this->object->requestAccess(array());
        
        $this->assertEquals(1, $answer->getStatus());
        $this->assertNotNull($answer->getContent());
    }

}

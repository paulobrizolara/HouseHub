<?php

namespace househub\answer;

use househub\json\JsonData;
use househub\json\JsonObject;
use househub\readers\LanguageReader;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-03 at 08:11:21.
 */
class JsonAnswerParserTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var JsonAnswerParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new JsonAnswerParser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     *  househub\answer\JsonAnswerParser::answerToJson
     * @todo   Implement testAnswerToJson().
     */
    public function testAnswerToJson() {
        $answer = new AnswerEntity();
        $answer->setContent(new JsonObject);
        $answer->setMessage('message');
        $answer->setStatus(1);

        $jsonAnswer = new JsonObject();
        $language = LanguageReader::getInstance();

        $jsonAnswer->addElement(new JsonData("status", $answer->getStatus()));
        $jsonAnswer->addElement(new JsonData("message", $language->translate($answer->getMessage())));

        $json = $answer->getContent();
        $json->setName("content");
        $jsonAnswer->addElement($json);

        $this->assertEquals($jsonAnswer, $this->object->answerToJson($answer));
    }

}

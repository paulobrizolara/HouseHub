<?php

namespace lightninghowl\reader;

class JsonReader {

    private $informations;

    public function __construct($file) {
        $this->informations = array();
        if(!is_file($file)){
            $this->informations = null;
        }else{
            $jsonFile = $file;
            $this->decode($jsonFile);
        }
    }

    private final function decode($jsonFile){
        $content = file_get_contents($jsonFile);
        $this->informations = json_decode($content, true);
    }
    
    public function get($property = '') {

        if (empty($property) || is_null($this->informations)) {
            return $this->informations;
        } else if (isset($this->informations[$property])) {
            return $this->informations[$property];
        }
        return null;
    }

}
<?php

namespace H\Sandbox;

class Product {
    private $name;
    private $value;
    
    public function __construct($name = NULL, $value = NULL) {
	   $this->setName($name);
	   $this->setValue($value);
    }
    
    public function setName($name) {
	   $this->name = $name;
    }
    
    public function getName() {
	   return $this->name;
    }
    
    public function setValue($value) {
	   $this->value = $value;
    }
    
    public function getValue() {
	   return $this->value;
    }

    public function __toString() {
    	return json_encode(array(
    	    'name' => $this->getName(),
    	    'value' => $this->getValue(),
    	));
    }
}

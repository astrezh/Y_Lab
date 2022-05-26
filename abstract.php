<?php

abstract class User {
  
  public $name;
  abstract public function Save();
  abstract public function New();
  
  public function getName(){
     $this->name = $name;
  }
}

class Person extends User {
    
      function Save(){
        return "Test class";
      }
  
      function Nem(){
        return "Test class";
      }
  
      function getName($name) {
        return parent::getName($name) . "Здорово!";
     }
  
}

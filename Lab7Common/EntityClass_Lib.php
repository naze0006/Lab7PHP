<?php

class Accessibility{
    private $accessibilityCode;
    private $description;
    
    function __construct($accessibilityCode, $description) {
        $this->accessibilityCode = $accessibilityCode;
        $this->description = $description;
    }

    function getAccessibilityCode() {
        return $this->accessibilityCode;
    }

    function getDescription() {
        return $this->description;
    }

   
}

class User{
  private $userId;  
  private $name;
  private $phone;
  private $password;
  
  function __construct($userId, $name, $phone) {
      $this->userId = $userId;
      $this->name = $name;
      $this->phone = $phone;
      
  }
  
  function getUserId() {
      return $this->userId;
  }

  function getName() {
      return $this->name;
  }

  function getPhone() {
      return $this->phone;
  }

  function getPassword() {
      return $this->password;
  }



  
    
    
}































?>
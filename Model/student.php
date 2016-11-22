<?php

include('../connection.php'); // Includes Login Script

class student {


  private $name="";
  public $username="";
  public $password="";
  private $email="";

  public function __constructor($usernam,$password)
  {
      $this->username=$username;
      $this->password=$password;

  }
  public function SetUsername($username)
  {
      $this->username=$username;
  }

  public function GetEmail()
  {
    return $this->name;
  }
  public function GetUsername()
  {
    return $this->name;
  }
  public function GetPassword()
  {
    return $this->name;
  }
}


 ?>

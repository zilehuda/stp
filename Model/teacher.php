<?php

include('../connection.php');   // Includes Login Script

class teacher {


  private $name="";
  private $username="";
  private $password="";
  private $email="";
  public function SetEmail($email)
  {

      $this->email=$email;
  }
  public function GetEmail()
  {
    return $this->email;
  }

  public function SetPassword($password)
  {

      $this->password=$password;
  }
  public function GetPassword()
  {
    return $this->password;
  }



}


 ?>

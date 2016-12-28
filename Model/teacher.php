<?php

include('../connection.php');   // Includes Login Script

class teacher {


  private $name="";
  private $password="";
  private $email="";
  private $teacher_id="";
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
  public function SetId($teacher_id)
  {

      $this->teacher_id=$teacher_id;
  }
  public function GetId()
  {

      return $this->teacher_id;
  }



}


 ?>

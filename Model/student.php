<?php

include('../connection.php');   // Includes Login Script

class student {


  private $name="";
  private $username="";
  private $password="";
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
  public function GetUsername()
  {
    return $this->username;
  }
  public function SetPassword($password)
  {

      $this->password=$password;
  }
  public function GetPassword()
  {
    return $this->password;
  }

  public function InsertStudentData()
  {
    include('../connection.php');
    $sql = "INSERT INTO Student (userid, password) VALUES ('$this->username','$this->password')";
     $stmt = sqlsrv_query( $conn, $sql );
  }


}


 ?>

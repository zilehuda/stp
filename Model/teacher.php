<?php

include('../connection.php');   // Includes Login Script

class teacher {


  private $name="";
  private $password="";
  private $email="";
  private $teacher_id="";
  private $sql="";
  private $stmt="";

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
  public function SetIdAndName()
  {
    include('../connection.php');
    $sql = "select * from teacher where email='$this->email' and teacher_pass='$this->password'";
    $stmt = sqlsrv_query( $conn, $sql );
    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
    $this->name=$row['first_name'];
    $this->teacher_id=$row['teacher_id'];
  }
  public function GetId()
  {
    return $this->teacher_id;
  }
  public function GetName()
  {
    return $this->name;
  }
  public function CheckTeacher()
  {
    include('../connection.php');
    $sql = "select * from teacher where email='$this->email' and teacher_pass='$this->password'";
    $stmt = sqlsrv_query( $conn, $sql );
      if($stmt) {
      $rows = sqlsrv_has_rows( $stmt );
      return $rows;
      }
  }



}


 ?>

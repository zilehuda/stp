<?php

include('../connection.php');   // Includes Login Script

class student {


  private $name="";
  private $password="";
  private $email="";
  private $student_id="";
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
  public function SetId($student_id)
  {

      $this->student_id=$student_id;
  }
  public function SetIdAndName()
  {
    include('../connection.php');
    $sql = "select * from student where email='$this->email' and student_pass='$this->password'";
    $stmt = sqlsrv_query( $conn, $sql );
    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
    $this->name=$row['first_name'];
    $this->student_id=$row['student_id'];
  }
  public function GetId()
  {
    return $this->student_id;
  }
  public function GetName()
  {
    return $this->name;
  }
  public function CheckStudent()
  {
    include('../connection.php');
    $sql = "select * from student where email='$this->email' and student_pass='$this->password'";
    $stmt = sqlsrv_query( $conn, $sql );
      if($stmt) {
      $rows = sqlsrv_has_rows( $stmt );
      return $rows;
      }
  }
  public function dbConn()
  {
    # code...
  }


}


 ?>

<?php

include('../connection.php');   // Includes Login Script

class student {


  private $fname="";
    private $lname="";
  public $password="";
  private $email="";
  private $student_id="";
  private $sql="";
  private $stmt="";
public function Setfname($fname)
  {

      $this->fname=$fname;
  }
    public function Setlname($lname)
  {

      $this->lname=$lname;
  }
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
    $this->fname=$row['first_name'];
    $this->student_id=$row['student_id'];
  }
  public function GetId()
  {
    return $this->student_id;
  }
  public function GetName()
  {
    return $this->fname;
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
     public function InsertStudentData()
  {
    include('../connection.php');
    //  $sql = "INSERT INTO student VALUES ('dsf','sdf','sdf','sdf')";
      
    $sql = "INSERT INTO student VALUES ('$this->fname','$this->lname','$this->email','$this->password')";
      $stmt = sqlsrv_query( $conn, $sql );
      echo $this->getpassword();
      if($stmt)
      {
         echo $this->fname; 
      }
      
     
  }
    


}


 ?>

<?php
   // Includes Login Script

class review {


  private $tudent;
  private $course;
  private $tudent_id;
  private $course_id;
  private $msg="";



  public function __construct(&$student,&$course)
  {

    $this->BuildingObjects();
    $this->student = $student;
    $this->course = $course;
  }
  public function SetMsg($msg)
  {

    $this->msg= $msg;
    echo $this->msg;
  }
  public function SetIDs()
  {
    $this->student_id = $this->student->Getid();
    $this->course_id = $this->course->Getid();
  }


  public function BuildingObjects()
  {
    $this->student  = new student();
    $this->course = new course();
  }
  public function SetYes()
  {
    include('../connection.php');
    //echo "string";

    $sql = "UPDATE CompCourse SET f_check = 'Y'  WHERE student_id='$this->student_id' and course_id='$this->course_id'";
    echo $this->student_id." ".$this->course_id;
    $stmt = sqlsrv_query( $conn, $sql );
    if($stmt)
    {
     echo "string";
    }
    else {
     echo "d";
    }
  }

  public function InsertTable()
  {
    include('../connection.php');
    //echo "string";
    $this->SetIDs();
    $sql = "insert into feedback values('$this->course_id','$this->student_id','$this->msg')";
    $stmt = sqlsrv_query( $conn, $sql );
    if($stmt)
    {

    }
    else {

    }


  }


}


 ?>

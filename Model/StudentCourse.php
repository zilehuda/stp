<?php
   // Includes Login Script

class StudentCourseClass {


  private $tudent;
  private $course;
  private $course_id;
  private $teacher_id;



  public function __construct(&$student,&$course)
  {

    $this->BuildingObjects();
    $this->student = $student;
    $this->course = $course;
  }
  public function SetIDs()
  {
    $this->student_id = $this->student->Getid();
    $this->course_id = $this->course->Getid();
  }

  public function InsertTable()
  {
    include('../connection.php');
    //echo "string";
    $this->SetIDs();
    $sql = "insert into student_course values('$this->course_id','$this->student_id',GETDATE())";

    $stmt = sqlsrv_query( $conn, $sql );
    if($stmt)
    {
        return true;
    }
    else {
        return false;
    }


  }

  private function BuildingObjects()
  {
    $this->student  = new student();
    $this->course = new course();
  }


}


 ?>

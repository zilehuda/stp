<?php
require_once('../Connection.php');

//include('../connection.php');   // Includes Login Script
class Course {


  private $course_id="";
  private $title="";
  private $description="";
  private $teacher_id="";
  private $record="";

  public function Setid($id)
  {

      $this->course_id=$id;
  }

  public function Getid()
  {

    return $this->course_id;
  }


  public function SetTitle($title)
  {

      $this->title=$title;
  }
  public function Gettitle()
  {
    echo "string";
    return $this->title;
  }

  public function Setdescription($description)
  {

      $this->description=$description;
  }
  public function InsertCourseData()
  {

    include('../connection.php');
    $teacher_id = $_SESSION["teacher_id"];

   $sql = "INSERT INTO course VALUES ('$this->title','$this->description','$teacher_id')";

   $stmt = sqlsrv_query( $conn, $sql );
   
  }


}




 ?>

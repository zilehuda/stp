<?php
require_once('../Connection.php');

//include('../connection.php');   // Includes Login Script
class Course {


  private $course_id="";
  private $title="";
  private $description="";
  private $teacher_id="";
  private $record="";
  private $category="";

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

// this metod is to fetch email of teacher for an email
  public function GetEmailofTeacher()
  {

    include('../connection.php');

   $sql = "select email from teacher t, course c where course_id='$this->course_id' and t.teacher_id=c.teacher_id";
   $stmt = sqlsrv_query( $conn, $sql );
   $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
   return $row['email'];
  }

  public function Setdescription($description)
  {

      $this->description=$description;
  }
  public function SetCategory($category)
  {

      $this->category=$category;
  }

  public function InsertCourseData()
  {

    include('../connection.php');
    $teacher_id = $_SESSION["teacher_id"];
    //insert into course table
   $sql = "INSERT INTO course VALUES ('$this->title','$this->description','$teacher_id')";
   $stmt = sqlsrv_query( $conn, $sql );
   //get course_id
   $sql = "select course_id from course where teacher_id='$teacher_id' and course_title='$this->title'";
   $stmt = sqlsrv_query( $conn, $sql );
   $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
   //set that id
   $this->Setid($row['course_id']);
   //insert a category
   $sql = "INSERT INTO Category VALUES ('$this->course_id','$this->category')";
   $stmt = sqlsrv_query( $conn, $sql );
  }


}




 ?>

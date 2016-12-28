<?php
require_once('../Connection.php');

//include('../connection.php');   // Includes Login Script
class Course {


  private $title="";
  private $description="";
  private $teacher_id="";
  private $record="";


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

  public function getRecords(){
    include('../connection.php');

    $sql = "select * from course";
    $stmt = sqlsrv_query( $conn, $sql );

		while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
    {

			$this->records[] = $row;
		}
		return $this->records;

	//else echo "No records found";
  }

}
$course = new Course;
$record = $course->getRecords();
echo $record;




 ?>

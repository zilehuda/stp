<?php
session_start();
include('../connection.php');

if($_GET["val"]=='delete')
{
  $sql = "delete from course where course_id= ? and teacher_id = ?";
  $params = array($_GET["course_id"],$_SESSION['teacher_id']);
  $stmt = sqlsrv_query( $conn, $sql ,$params );
    if($stmt) {
    header("location:../Views/Teacherhome.php");
    }

}
if($_GET["val"]=='confirm')
{
  $sql = "delete from student_course where course_id= ? and student_id = ?";
  $params = array($_GET["course_id"],$_GET['student_id']);
  $stmt = sqlsrv_query( $conn, $sql ,$params );
    if($stmt) {
    header("location:../Views/Teacherhome.php");
    }


}
function DeleteCourse($course_id)
{

  $course_id = $_GET["POST"];
echo $course_id;
  //include('../connection.php');
  //$query = "delete from course where course_id='$course_id'";
  //$stmt = sqlsrv_query( $conn, $query );


}



?>

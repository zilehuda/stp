<?php
session_start();
include '../Model/student.php';
include '../Model/course.php';
include '../Model/Review.php';

if(isset($_GET['val']))
{
  $_SESSION['course_id']=$_GET['course_id'];
  $course_title = $_GET['course_title'];
  header("location:../Views/review.php?course_title=$course_title");
}
else {

  $student = new student();
  $course = new course();

  $student->SetId($_SESSION['student_id']);
  $course->SetId($_SESSION['course_id']);
  $review = new review($student,$course);
  $review->SetMsg($_GET["msg"]);
  $review->SetIDs();

  $review->InsertTable();
  $review->SetYes();
  header("location:../Views/studenthome.php");


}



 ?>

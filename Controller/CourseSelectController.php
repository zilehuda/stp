<?php
include('../Model/Student.php');
include('../Model/Course.php');
include('../Model/StudentCourse.php');
session_start();
include('../connection.php');
if(isset($_GET['course_id']))
{
   $student = new Student();
   $student->Setid($_GET['student_id']);

   $course = new Course();
   $course->Setid($_GET['course_id']);

   $sc = new StudentCourseClass($student,$course);

   if($sc->InsertTable())
   {
     $_SESSION['email'] = $course->GetEmailofTeacher();
     echo $_SESSION['email'];
     header("location:../Views/EmailForm.php");

   }
  else {
    {
      header("location:../Views/studenthome.php");
    }
  }
}


//  $sql = "INSERT INTO student_course VALUES ('$this->course_id ','$this->student_id','18-06-12')";




?>

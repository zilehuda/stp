<?php
session_start();
include '../Model/Course.php';


  $course = new Course();
  $course->SetTitle($_GET["title"]);
  $course->Setdescription($_GET["description"]);
  $course->InsertCourseData();

//$st.SetUsername($_GET["username"]);
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
  //access query
//$email=$st->GetEmail();
//$password=$st->GetPassword();


 ?>

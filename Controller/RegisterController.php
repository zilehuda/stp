<?php
include '../Model/student.php';
include('../connection.php');
include '../Model/teacher.php';

//session_start();
$st = new student();
//$st->username=$_GET["username"];
//$st->password=//;
//$st->first_name=$_GET["password"];
//$st->last_name=$_GET["password"

if(ISSET($_GET["student"]))
{
    $st = new student();
    $st->Setfname($_GET["fname"]);

    $st->Setlname($_GET["lname"]);

    $st->SetEmail($_GET["email"]);

    $st->SetPassword($_GET["password"]);

    $st->InsertStudentData();

    header("location:../Views/login.php");



}
if(ISSET($_GET["teacher"]))
{
   $st = new teacher();
    $st->Setfname($_GET["fname"]);

    $st->Setlname($_GET["lname"]);

    $st->SetEmail($_GET["email"]);

    $st->SetPassword($_GET["password"]);

    $st->InsertteacherData();
    header("location:../Views/login.php");




}
//echo $st->username . " ". $st->password;
 //echo $st->InsertStudentData();

//  $sql = "INSERT INTO student  VALUES ($st->username','$st->password')";
  //   $stmt = sqlsrv_query( $conn, $sql );

    //$st->SetUsername($_GET["username"]);
    //$st->SetPassword($_GET["password"]);
    //echo $st->SetIdAndName();


  ?>

<?php
include '../Model/student.php';
include '../Connection.php';
$st = new student();

$st->SetPassword($_GET["pass"]);
$pass= $st->GetPassword();
$student_id= $_SESSION["student_id"];


$sql = "UPDATE teacher SET teacher_pass = '$pass'  WHERE teacher_id = '$student_id'";
$stmt = sqlsrv_query( $conn, $sql );
      if($stmt)

{
    session_start();
    $_SESSION['logged']=true;
    
    header("location:../Views/Studenthome.php");
    echo $student_id;
      }
else {
      $_SESSION['logged']=false;
      header("location:../Views/login.php?msg=failed");
    }
  
 ?>
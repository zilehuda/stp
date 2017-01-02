<?php  
session_start();
include '../Model/teacher.php';
include '../Connection.php';
$st = new teacher();


$st->SetPassword($_GET["pass"]);
$pass= $st->GetPassword();
$teacher_id= $_SESSION["teacher_id"];


$sql = "UPDATE teacher SET teacher_pass = '$pass'  WHERE teacher_id = '$teacher_id'";
$stmt = sqlsrv_query( $conn, $sql );
      if($stmt)

{
    session_start();
    $_SESSION['logged']=true;
    
    header("location:../Views/Teacherhome.php");
    echo $teacher_id;
      }
else {
      $_SESSION['logged']=false;
      header("location:../Views/login.php?msg=failed");
    }


  
 ?>


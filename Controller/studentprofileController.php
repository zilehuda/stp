<?php
include '../Model/student.php';
include '../Connection.php';
$st = new student();


$st->SetPassword($_GET["pass"]);
$pass= $st->GetPassword();


$sql = "UPDATE student SET student_pass = $pass  WHERE email='shayan@'";
$stmt = sqlsrv_query( $conn, $sql );
      if($stmt)

{
    session_start();
    $_SESSION['logged']=true;
    
    header("location:../Views/Studenthome.php");
    echo "Entered Successfully";
      }
else {
      $_SESSION['logged']=false;
      header("location:../Views/login.php?msg=failed");
    }


  
 ?>
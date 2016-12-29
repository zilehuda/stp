<?php
  include('../connection.php');
  include('../Model/student.php');



$st = new student();
$st->SetEmail($_GET["email"]);
$st->SetPassword($_GET["password"]);
if($st->CheckStudent()==true)
{
    session_start();
    $_SESSION['logged']=true;
    $st->SetIdAndName();
    $_SESSION["teacher_id"]=$st->GetID();
    echo $_SESSION["student_id"];
    $_SESSION["username"] = $st->GetName();
    $_SESSION["email"]=$email;
    header("location:../Views/Studenthome.php");
    echo "Entered Successfully";
      }
  else {
      $_SESSION['logged']=false;
      header("location:../Views/login.php?msg=failed");
    }

 ?>

<?php
  include('../connection.php');
  include('../Model/teacher.php');



$st = new teacher();
$st->SetEmail($_GET["email"]);
$st->SetPassword($_GET["password"]);
if($st->CheckTeacher()==true)
{
    session_start();
    $_SESSION['logged']=true;
    $st->SetIdAndName();
    $_SESSION["teacher_id"]=$st->GetID();
    $_SESSION["username"] = $st->GetName();
    $_SESSION["email"]=$st->GetEmail();
    header("location:../Views/Teacherhome.php");
    //echo $_SESSION["teacher_id"];
      }
  else {
      $_SESSION['logged']=false;
      header("location:../Views/login.php?msg=failed");
    }

 ?>

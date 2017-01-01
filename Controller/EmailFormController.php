<?php
session_start();
include '../Model/teacher.php';
include '../Model/student.php';

$message = 'First name: ' .$_GET['fname']. "\n".
            'Last name: ' .$_GET['lname']. "\n".
            'Message: ' .$_GET['message']. "\n";
            $receiver_email = $_SESSION['email'];
            mail('$receiver_email','Congratulation: You got a new student',$message);
              header("location:../Views/studenthome.php");



echo $receiver_email;





 ?>

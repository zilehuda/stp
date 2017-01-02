<?php
session_start();
include '../Model/teacher.php';
include '../Model/student.php';

$message = 'First name: ' .$_GET['fname']. "\n".
            'Last name: ' .$_GET['lname']. "\n".
            'Message: ' .$_GET['message']. "\n";
            $receiver_email = $_SESSION['email'];
            echo $message;

          //  mail('k142307@nu.edu.pk','subect','hellp world','from portal');

            mail($receiver_email,'Congratulation: You got a new student',$message,'From student');
            //  header("location:../Views/studenthome.php");



echo $receiver_email;





 ?>

<?php
include '../Model/student.php';

$st = new student();
$st->username=$_GET["username"];
$st->password=$_GET["password"];
//echo $st->username . " ". $st->password;

  $sql = "INSERT INTO Student (userid, password) VALUES ('$st->username','$st->password')";
      $stmt = sqlsrv_query( $conn, $sql );
  ?>

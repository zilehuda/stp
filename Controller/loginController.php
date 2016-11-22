<?php
include '../Model/student.php';


$st = new student();
$st->username=$_GET["username"];
$st->password=$_GET["password"];
//$st.SetUsername($_GET["username"]);
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
  //access query
  $sql = "select * from Student where userid='$st->username' and password='$st->password'";
//$sql = "INSERT INTO Student (userid, password) VALUES ('zilay1','fast')";

  $stmt = sqlsrv_query( $conn, $sql );

  if($stmt) {
  $rows = sqlsrv_has_rows( $stmt );
  if($rows === true) {

    session_start();
    $_SESSION["username"] = $st->username;
    echo "Entered Successfully";

      }
  else {
    header("location:../Views/login.php?msg=failed");
    //echo "no";
  }
}
 ?>

<?php
include '../Model/student.php';


<$st = new student();
  $st->SetUsername($_GET["username"]);
  $st->SetPassword($_GET["password"]);

//$st.SetUsername($_GET["username"]);
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
  //access query
$username=$st->GetUsername();
$password=$st->GetPassword();

$sql = "select * from Student where userid='$username' and password='$password'";

  $stmt = sqlsrv_query( $conn, $sql );

  if($stmt) {
  $rows = sqlsrv_has_rows( $stmt );
  if($rows === true) {

   session_start();
    $_SESSION['logged']=true;
    $_SESSION["username"] = $username;
  header("location:../Views/StudentProfile.php");
    echo "Entered Successfully";

      }
  else {
      $_SESSION['logged']=false;
    header("location:../Views/login.php?msg=failed");
  echo "no";
  }
}
 ?>

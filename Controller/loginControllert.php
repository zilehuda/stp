<?php
include '../Model/teacher.php';


  $st = new teacher();
  //$st->SetEmail($_GET["email"]);
  //$st->SetPassword($_GET["password"]);

//$st.SetUsername($_GET["username"]);
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
  //access query
//$email=$st->GetEmail();
//$password=$st->GetPassword();

$email='shayan';
$password='1234';
echo "$email";
$sql = "select * from teacher where email='$email' and teacher_pass='$password'";

  $stmt = sqlsrv_query( $conn, $sql );

  if($stmt) {
  $rows = sqlsrv_has_rows( $stmt );
  if($rows == true) {
   session_start();
    $_SESSION['logged']=true;
     $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
     $name=$row['first_name'];

   $_SESSION["username"] = $name;
  header("location:../Views/TeacherProfile.php");
    echo "Entered Successfully";

      }
  else {

      $_SESSION['logged']=false;
    header("location:../Views/login.php?msg=failed");
  echo "no";
  }
}
 ?>

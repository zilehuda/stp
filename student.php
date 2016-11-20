<?php

include('connection.php'); // Includes Login Script

class student {


  private $name="ff";
  public $username="";
  public $password="";
  private $email="";

  public function GetEmail()
  {
    return $this->name;
  }


}
  $st = new student();
$st->username=$_GET["username"];
  $st->password=$_GET["password"];
//$query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
  $sql = "select * from Student where userid='$st->username' and password='$st->password'";
  //$sql = "INSERT INTO Student (userid, password) VALUES ('zilay1','fast')";
  $stmt = sqlsrv_query( $conn, $sql );

  if($stmt) {
    $rows = sqlsrv_has_rows( $stmt );
    if($rows === true) {
      echo "yes";

    }
    else {
      echo "no";
    }
  }



//  $st->username=$_GET["username"];
//  $st->password=$_GET["password"];
//  $sql = "INSERT INTO Student (userid, password) VALUES ($st->username, $st->password)";
//  $stmt = sqlsrv_query( $conn, $sql );



//  echo $st->password;




 ?>

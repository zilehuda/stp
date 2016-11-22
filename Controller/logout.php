<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Views/index.php"); // Redirecting To Home Page
}
?>

<?php
if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
 {
     $username=$_REQUEST['username'];
     $pswd=$_REQUEST['password'];

 }

 if ($username=="admin" && $pswd=="admin@123")
 {
     session_start();
     $_SESSION['username']=$username;
     header("Location: dashboard.php");

 }
 else
 {
     header("Location: index.php?msg=Username or Password is incorrect");
 }

?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
     $username    =  $_POST['username'];
    $password    =  $_POST['password'];
  
$rs    = $conn->query( "SELECT * FROM users WHERE username='" . $username . "' AND password='" .  MD5($password) . "'")  ;
  $numrow    = $rs->num_rows;
if ($numrow > 0) {
      $row = $rs->fetch_assoc();
  $_SESSION['level']  = $row['level'];
  $_SESSION['name']  = $row['username'];
  $_SESSION['id'] = $row['userid'];
   header('location:../home.php');
    } else {
	$_SESSION['error'] = " Login error";
         header('location:../login.php');
    }
}

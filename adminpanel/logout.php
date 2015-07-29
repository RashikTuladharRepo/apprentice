<?php
session_start();
session_unset();
$_SESSION['username']="";
$_SESSION['msg']="You Have Logged Out";
header('location:index.php');
?>
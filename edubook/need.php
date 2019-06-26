<?php
include 'connection.php';
session_start();
if(!$_SESSION['username']){
	header("location:loginpage.php");
}
?>


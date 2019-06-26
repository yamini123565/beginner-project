<?php
include 'connection.php';
session_start();
$username=$_SESSION['username'];
$mypost=$_POST['post'];
$mypost=stripslashes($mypost);
$mypost=htmlentities($mypost);
if($mypost=="")
{
	header("location:index.php");
}
else {
	$sql="SELECT * FROM users WHERE emailid='$username'";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($result);
	$userid=$array['id'];
	$date=date("Y-m-d h:i:s");
	$sql="INSERT INTO posttab(`userid`, `post`, `time`) VALUES ('$userid','$mypost','$date')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:index.php");
	}
	else {
		echo "error";
	}
}
?>
<?php
include 'connection.php';
include 'need.php';
$postid=$_POST['postid'];
$sql="DELETE FROM `posttab` WHERE postid=$postid";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header("location:displaypost.php");
	}
?>

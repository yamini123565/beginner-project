<?php
include 'need.php';
include 'connection.php';
$postid=$_POST['postid'];
$post=$_POST['post'];
$sql="UPDATE `posttab` SET `post`='$post' WHERE `postid`=$postid";
$result=mysqli_query($conn,$sql);
if ($result) {
	header("location:displaypost.php");
}
else{
	echo "error";
}
?>
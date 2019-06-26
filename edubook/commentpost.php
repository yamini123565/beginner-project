<?php 
include 'need.php';
include 'connection.php';
$postid=$_POST['postid'];
$content=$_POST['comment'];
$userid=$_SESSION['userid'];
$content=htmlentities($content);
$sql="INSERT INTO `comment` (`postid`, `content`, `userid`) VALUES ( '$postid','$content','$userid');";
	$result=mysqli_query($conn,$sql);
	if($result){
	 header("location:displaypost.php")	;
	}
	else{
		echo "oops";
	}
?>
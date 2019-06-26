<?php
include 'connection.php';
$emailid=$_POST['email'];
$securitycode=$_POST['securitycode'];
$sql="SELECT pin FROM register WHERE emailid='$emailid'";
$result=mysqli_query($conn,$sql);
$array=mysqli_fetch_array($result);
if($array['pin']==$securitycode){
	$sql="DELETE FROM register WHERE emailid='$emailid'";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:loginpage.php#login");
	}
}
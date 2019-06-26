<?php
include 'connection.php';
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$sql="SELECT * FROM users WHERE emailid='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,$sql);
$array=mysqli_fetch_array($result);
$user=$array['username'];
$count=mysqli_num_rows($result);
$sql1="SELECT pin FROM register WHERE emailid='$myusername'";
$result1=mysqli_query($conn,$sql1);
$array1=mysqli_fetch_array($result1);

if(!$array1['pin']){
if($count==1)
{
	session_start();
	$_SESSION['username']=$myusername;
	$_SESSION['user']=$user;
	$_SESSION['userid']=$array['id'];
     header("location:index.php");
}
else {
	header("location:oops.php");
} 
}
else{
	header("location:pinform.php");
}
?>
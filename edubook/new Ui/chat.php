<?php
include 'connection.php';
session_start();
$msg=$_POST['msg'];
$userid=$_SESSION['userid'];
$msg=htmlentities($msg);
$date=date("Y-m-d h:i:s");
if($msg!=""){
$sql="INSERT INTO chat (`userid`, `message`, `time`) VALUES ('$userid','$msg','$date')";
}
else{
	header("location:irc.php");
}
$result=mysqli_query($conn,$sql);
if($result)
{
header("location:irc.php");
}
	
?>
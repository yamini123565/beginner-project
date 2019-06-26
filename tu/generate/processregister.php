<?php
	include 'connection.php';
	$username=stripslashes($_POST['username']);
	$password=stripslashes($_POST['password']);
	$mailid=stripslashes($_POST['email']);
	if(isset($username) && isset($password) && isset($mailid)){
		$sql="insert into tu_users(username,mailid,password) values('".$username."','".$mailid."','".$password."')";
		$result=mysqli_query($conn,$sql);
		$sql="select * from tu_users where mailid='".$mailid."'";
		$result=mysqli_query($conn,$sql);
		if($array=mysqli_fetch_array($result)){
			session_start();
			$_SESSION['username']=$array['username'];
			$_SESSION['id']=$array['userid'];
		}
	}
?>
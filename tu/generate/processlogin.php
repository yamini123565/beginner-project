<?php
include 'connection.php';
	$mailid=stripslashes($_POST['username']);
	$password=stripslashes($_POST['password']);
	if(isset($mailid) && isset($password)){
		$sql="select * from tu_users where mailid='".$mailid."'";
		echo $sql;
		$result=mysqli_query($conn,$sql);
		if($array=mysqli_fetch_array($result)){
			if($array['password']==$password){
				session_start();
				$_SESSION['username']=$array['username'];
				$_SESSION['id']=$array['userid'];
				header("location:index.php");
			}else{
				header("location:login.php?err=pwdmismatch");
			}
		}
	}
?>
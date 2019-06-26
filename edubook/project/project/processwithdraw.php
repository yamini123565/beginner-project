<?php
include "connection.php";
session_start();
if(isset($_POST['amount'])){
	$amount=(int)$_POST['amount'];
	$sql="SELECT * FROM balance_info where userid=".$_SESSION['id'];
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	$array=mysqli_fetch_array($result);
	if($count==1){
		$balance=$array['balance'];
		if($balance >= $amount){
			$otp=array_merge(range(0,9),range('a','z'),range('A','Z'));
			$otp=implode("",$otp);
$otp=substr(str_shuffle($otp),0,15);
			$to = $_SESSION['mail'];
$subject = "My subject";
$txt = "use this OTP ".$otp;

mail($to,$subject,$txt);;
			$sql="delete from otp where userid=".$_SESSION['id'];
			mysqli_query($conn,$sql);
			$sql="insert into otp(userid,otp) values(".$_SESSION['id'].",'".$otp."')";
			mysqli_query($conn,$sql);
$_SESSION['amount']=$amount;
			$_SESSION['balance']=$balance;
			header("location:otp.php");
		}else{
			header("location:index.php?err=insufficient fund");
		}
	}
}else{
	echo "invalid transaction";
	header("location:index.php");
}
?>
<?php
include 'connection.php';
	session_start();
      $sql="select * from otp WHERE userid=".$_SESSION['id'];
     $result=mysqli_query($conn,$sql);
 $array=mysqli_fetch_array($result);

if($_POST['otp']==$array['otp']){
		$balance=$_SESSION['balance']-$_SESSION['amount'];
		$sql="update balance_info set balance=".$balance." WHERE userid=".$_SESSION['id'];
		mysqli_query($conn,$sql);
                $sql="delete from otp WHERE userid=".$_SESSION['id'];
		mysqli_query($conn,$sql);
		header("location:index.php?err=Withdrawal successful");
}
else{
header("location:index.php?err=invalid otp");
}
?>

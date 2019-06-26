<?php
include 'connection.php';
include 'phpqrcode/qrlib.php';
if(isset($_GET['pin'])){
	$pin=$_GET['pin'];
	$sql="SELECT * FROM users WHERE pinno=".$pin;
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	$array=mysqli_fetch_array($result);
	if($count==1){
		session_Start();
		$_SESSION['username']=$array['username'];
		$_SESSION['id']=$array['userid'];
                $_SESSION['mail']=$array['mail'];
		$ori=array_merge(range(0,9),range('a','z'),range('A','Z'));
		$ori=implode("",$ori);
		$new_nfc_auth=substr(str_shuffle($ori),0,15);
	$to = $_SESSION['mail'];
$subject = "NFC Auth Key";
$txt="use this NFC auth Key ".$new_nfc_auth;
mail($to,$subject,$txt);
		$sql="delete from nfc_auth where nfc_auth='".$array['nfc_auth']."'";
		mysqli_query($conn,$sql);
		$sql="update users set nfc_auth='".$new_nfc_auth."' WHERE pinno=".$pin;
		mysqli_query($conn,$sql);
		$sql="insert into nfc_auth(nfc_auth,status) values('".$new_nfc_auth."',0)";
		mysqli_query($conn,$sql);
		echo 'success';
	}
	else{
		echo 'user auth failed';
	}
}else{
	echo 'invalid method';
}
?>
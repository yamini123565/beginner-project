<?php

include 'connection.php';

if(isset($_GET['nfc'])){
	$nfc=$_GET['nfc'];
	$sql="SELECT * FROM users WHERE nfc_auth='".$nfc."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){
		$sql="update nfc_auth set status=1 WHERE nfc_auth='".$nfc."'";
		$result=mysqli_query($conn,$sql);
      
		echo 'success';
	}
	else{
		echo 'user auth failed';
	}
}else{
	echo 'invalid method';
}

?>
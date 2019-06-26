<?php
include 'connection.php';
if(isset($_GET['surl'])){
	$surl=$_GET['surl'];
	$sql="select * from url_mapping where surl='".$surl."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==0){
		echo "available";
	}else{
		echo "exists";
	}
}
?>
<?php
	include 'connection.php';
	if(isset($_POST['lurl'])){
		$lurl=stripslashes($_POST['lurl']);
		if(isset($_POST['surl'])){
			$surl=stripslashes($_POST['surl']);
		}else{
			$surl="";
		}
		if(isset($_POST['description'])){
			$description=stripslashes($_POST['description']);
		}else{
			$description="description not mentioned";
		}
		$sql="Select * from url_mapping where lurl='".$lurl."'";
		$result=mysqli_query($conn,$sql);
		$no_of_rows=mysqli_num_rows($result);
		if($no_of_rows==0){
			$length = 7;
			if($surl==""){
				$surl = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
			}
			$sql="insert into url_mapping(lurl,surl,description) values('".$lurl."','".$surl."','".$description."')";
			mysqli_query($conn,$sql);
			echo "the shorten Url for the Url is <br><a href='http://localhost/tu/".$surl."'>localhost/tu/".$surl."</a>";
		}else{
			$array=mysqli_fetch_array($result);
			echo "the shorten Url for the Url already exists <br><a href='http://localhost/tu/".$array['surl']."'>localhost/tu/".$array['surl']."</a>";
		}
	}
?>
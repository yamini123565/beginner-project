<?php
	include 'generate/connection.php';

	$url = $_SERVER['REQUEST_URI']; 
	$urlArray = explode('/', $url);
	// echo sizeof($urlArray);
	// for($i=0;$i<sizeof($urlArray);$i++){
	// 	echo $urlArray[$i]."<br>";
	// }
	if(sizeof($urlArray)==3){
		$sql="select * from url_mapping where surl='".$urlArray[2]."'";
		$result=mysqli_query($conn,$sql);
		if($array=mysqli_fetch_array($result)){
			header("location:".$array['lurl']);
		}
		if($urlArray[2]==""){
			header("location:generate/index.php");
		}
	}else if(sizeof($urlArray)>3 || sizeof($urlArray)<3){
		header("location:generate/index.php");
	}
?>
<?php
include 'connection.php';
include 'need.php';
$sql="SELECT * FROM chat";
$result=mysqli_query($conn,$sql);
while($array=mysqli_fetch_array($result)){
	$id=$array['userid'];
	$sql="SELECT username FROM users WHERE id='$id'";
	$result1=mysqli_query($conn,$sql);
	$array1=mysqli_fetch_array($result1);
	if($id!= $_SESSION['userid']){
		echo "<p><b>user:</b>".$array1['username'];
		echo "<br><em>";
		echo $array['message'];
		echo "</em><br></p>";
	}
	elseif ($id==$_SESSION['userid']){
		echo "<p align=right><b>user:</b>".$array1['username'];
		echo "<br><em>";
		echo $array['message'];
		echo "</em><br></p>";
	}
}
?>
<head>
<style>
textarea{resize:none;}
</style>
</head>
<body>
<form method="post" action="chat.php"><textarea name=msg rows=2 cols=30></textarea><button>send</button></form>
</body>
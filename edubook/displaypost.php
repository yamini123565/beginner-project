
<?php
include 'connection.php';
include 'need.php';
$username=$_SESSION['username'];
?>
<html>
<head>
</head>
<body>
<div class="col-md-6">
<?php
	$sql="SELECT * FROM users WHERE emailid='$username'";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($result);
	$userid=$array['id'];
	$user=$array['username'];
	$sql="SELECT * FROM posttab where userid=$userid";
	$result=mysqli_query($conn,$sql);
	while($array=mysqli_fetch_array($result)){
		echo "<table width=650 cellspacing=0 border=1><tr><td>";
		echo "POST ID:".$array['postid']."<br>";
		echo "User:$user<br>";
		echo "Email:-$username<br>";
		echo "post:".$array['post'];
		$postid=$array['postid'];
		$sql="SELECT * FROM comment where postid=$postid";
		$result2=mysqli_query($conn,$sql);
		if($result2){
			echo "<br><hr><b>comments</b><hr>";
			while(($array1=mysqli_fetch_array($result2))){
			$ui=$array1['userid'];
			$sql1="SELECT * FROM users where id=$ui";
			$result3=mysqli_query($conn,$sql1);
			$array2=mysqli_fetch_array($result3);
;			echo "user:";
			echo $array2['username']."<br>";
			echo $array1['content']."<br><hr>";
			}
		}
		echo "
		<table width=200><tr><td><form method=post action=deletepost.php>
		<button name=postid value="; echo $array['postid'];echo ">delete</button>
				</form></td><td><form method=post action=edit.php>
		<button name=postid value="; echo $array['postid'];echo ">edit</button></form></td><td>
		<form method=post action=comment.php>
		<button name=postid value="; echo $array['postid'];echo ">comment</button></form>
		</td></tr></table>
</td></tr></table><br>";
	}
	$sql="SELECT * FROM posttab";
	$result=mysqli_query($conn,$sql);
	while($array=mysqli_fetch_array($result)){
		if($array['userid']!=$userid){
		echo "<table width=650 cellspacing=0 border=1><tr><td>";
		echo "User:";
		$userid1=$array['userid'];
		$sql="SELECT * FROM users where id=$userid1";
		$result1=mysqli_query($conn,$sql);
		if($array1=mysqli_fetch_array($result1)){
		echo "".$array1['username']."</br>";
		}
		echo "post:".$array['post']."<br>";
		$postid=$array['postid'];
		$sql="SELECT * FROM comment where postid=$postid";
		$result2=mysqli_query($conn,$sql);
		if($result2){
			echo "<br><hr><b>comments</b><hr>";
			while(($array1=mysqli_fetch_array($result2))){
			$ui=$array1['userid'];
			$sql1="SELECT * FROM users where id=$ui";
			$result3=mysqli_query($conn,$sql1);
			$array2=mysqli_fetch_array($result3);
;			echo "user:";
			echo $array2['username']."<br>";
			echo $array1['content']."<br><hr>";
			}
		}
		echo "
		<table width=200><tr><td>
		<form method=post action=comment.php>
		<button name=postid value="; echo $array['postid'];echo ">comment</button></form>
		</td></tr></table>";
		echo "</td></tr></table><br>";

		}

	}
	?>
</div>
</body>
</html>

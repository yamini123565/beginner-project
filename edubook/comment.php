<?php
include 'need.php';
include 'connection.php';
$postid=$_POST['postid'];
$sql="SELECT * FROM posttab where postid=$postid";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($result);
	echo "<head><style>textarea{resize:none;}</style></head><body><h1>Comment:</h1>";
	 echo "<b><em>post:</em></b><br>".$array['post']."<br>"; 
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
	echo "<table width=200><tbody><tr><td colspan=3>";echo "</td></tr>";
	echo"<form method=post action=commentpost.php><textarea name=comment rows=2 cols=35></textarea><tr><td height=15 width=40>
		  <button name=postid value="; echo $array['postid'];echo ">done</button>
				</form></td><td height=15 width=40><form method=post action=displaypost.php>
		<br><button>cancel</button></form></td><td></td></tr></tbody></table>";
	?>
<?php
include 'need.php';
include 'connection.php';
$postid=$_POST['postid'];
$sql="SELECT * FROM posttab where postid=$postid";
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($result);
	echo "<head><style>textarea{resize:none;}</style></head><body><h1>Edit Post:</h1>";
	echo "<table width=200><tbody><tr><td colspan=3><form method=post action=updatepost.php><textarea name=post rows=5 cols=35>"; echo $array['post']; echo "</textarea></td></tr>";
	echo"<tr><td height=15 width=40>
		<button name=postid value="; echo $array['postid'];echo ">done</button>
				</form></td><td height=15 width=40><form method=post action=displaypost.php>
		<br><button>cancel</button></form></td><td></td></tr></tbody></table>";
?>
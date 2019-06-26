<?php
include 'connection.php';
 $myusername=$_POST['name'];
$myemailid=$_POST['email'];
$mypassword=$_POST['pass'];
$mypass=$_POST['confirmpassword'];
$mydate=$_POST['date'];
$mymonth=$_POST['month'];
$myyear=$_POST['year'];
$mygender=$_POST['gender'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myemailid = stripslashes($myemailid);
$sql="SELECT username FROM users WHERE emailid='$myemailid'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if(strlen($myemailid)<1 or strlen($myusername)<1 or strlen($mypassword)<1){
	echo "enter data";
}
else{
if(!$count){
$sql="INSERT INTO users (`username`, `emailid`, `password`, `dob`, `gender`, `id`) VALUES ('$myusername', '$myemailid', '$mypassword', '$myyear-$mymonth-$mydate', '$mygender', NULL);";
$result1=mysqli_query($conn,$sql);
if($result1)
{
$_SESSION['username']=$myusername;
$subject="edubook.cf registration";
$upper=99999;
$lower=10000;
$random=mt_rand($lower, $upper);
$body="your edubook verification code is $random";
mail($myemailid, $subject, $body);
$sql="INSERT INTO `register` (`emailid`, `pin`) VALUES ('$myemailid', '$random')";
mysqli_query($conn,$sql);
echo "verify my account";
echo"<form method=post action=pinform.php><button value=";echo "$myemailid";echo " name=email>verify</button></form>";
} 
}
else 
{
echo "mail already exits";	
}
	}
?>
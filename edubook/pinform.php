<?php
$emailid=$_POST['email'];
echo "<form method=post action=verifyemail.php>
		Enter the pin you have received:<br>
		<input type=text id=securitycode name=securitycode>
		<button value=";echo "$emailid";echo " id=email name=email>submit</button>
		</form>";
?>
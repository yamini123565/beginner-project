<?php
include 'need.php';
include 'connection.php';
?>
<html>
	<head>
	 <title>TVS</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<center>
			<div id="content">
			<h1 class="text text-success">Welcome <?php echo $_SESSION['username']; ?></h1>
			<br>
			<p class="text-warning"></p>
			<form method="post" action="withdraw.php"><input type="submit" name="withdraw" onclick="withdraw()" class="btn btn-primary" value="withdraw"></input></form>
			<a href="logout.php">log out</a>
<?php
if(isset($_GET['err'])){
echo "<p class='txt txt-success'>".$_GET['err']."</p>";
}
?>
		</center>
	</body>
</html>

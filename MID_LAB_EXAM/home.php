<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	 <?php

	if (isset ($_REQUEST['name']))
	{
		$name=$_REQUEST['name'];
		echo "<h1>Welcome ".$_REQUEST['name']."</h1>";


	}
	
	?>

	<br>
	<a href="logout.php"> logout</a>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>
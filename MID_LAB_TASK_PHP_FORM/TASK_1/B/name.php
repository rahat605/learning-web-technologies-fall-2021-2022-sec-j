<?php 
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Username</title>
</head>
<body>	
	<form method="get">
		<fieldset>
			<legend>NAME</legend>
						<input type="text" name="myname" value=""><br><hr>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>date of birth</title>
</head>
<body>	
	<form method="get">
		<fieldset>
			<legend>Date of Birth</legend>
		 				<input type="date" name="dob" value="<?php 
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['dob'];
		if($dob == ""){
			echo "null value...";
		}else{
			echo $dob;
		}	
	}
	
?>"> <br><hr>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
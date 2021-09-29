<?php 
	if(isset($_REQUEST['submit']))
	{
		$gen = $_REQUEST['gender'];
		if($gen == ""){
			echo "null value...";
		}else
			{
				{
					$n = count($gen);
					for($i = 0; $i < $n; $i++){
						echo $gen[$i]." ";
					}
				}
			}	
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>gender</title>
</head>
<body>	
	<form method="get">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender[]" value="Male"> Male
			<input type="radio" name="gender[]" value="Female"> Female
			<input type="radio" name="gender[]" value="Other"> Other
			<br><hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
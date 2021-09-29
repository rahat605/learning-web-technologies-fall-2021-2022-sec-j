<?php 

	if(isset($_REQUEST['submit']))
	{
		$degree = $_REQUEST['degree'];
		if($degree == ""){
			echo "null value...";
		}else{
			{
				$n = count($degree);
				for($i = 0; $i < $n; $i++){
					echo $degree[$i]." ";
				}
			}
		}	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>degree</title>
</head>
<body>	
	<form method="get">
		<fieldset>
			<legend>degree</legend>
			<input type="checkbox" name="degree[]" value="SSC"> SSC
			<input type="checkbox" name="degree[]" value="HSC"> HSC
			<input type="checkbox" name="degree[]" value="BSc"> BSc
			<input type="checkbox" name="degree[]" value="MSc"> MSc
			<br><hr>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
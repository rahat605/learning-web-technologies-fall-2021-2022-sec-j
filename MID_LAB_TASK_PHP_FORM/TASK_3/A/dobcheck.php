<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['dob'];
		if($dob == ""){
			echo "null value...";
		}else{
			echo $dob;
		}	
	}else{
		echo "invalid request...";
	}
	
?>
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
	}else{
		echo "invalid request...";
	}
	
?>
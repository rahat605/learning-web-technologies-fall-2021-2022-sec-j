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
		
	}else{
		echo "invalid request...";
	}
	
?>
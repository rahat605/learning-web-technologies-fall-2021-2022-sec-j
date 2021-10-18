<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['id'] != ""){
			if($_POST['password'] !="" && $_POST['password']==$_POST['confirmpassword']){
				if($_POST['name'] != ""){
					if($_POST['usertype'] != ""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['id']."|".$_POST['password']."|".$_POST['name']."|".$_POST['usertype']."\r\n";
					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.html');
				}
				
				else{
					echo "Invalid usertype...";
				}	
			
			}
			else{
				echo "Invalid name...";
			}
		}
		else{
			echo "Invalid Password...";
		}
		}
		else{
		   echo "Invalid id...";}

	}	
	

?>
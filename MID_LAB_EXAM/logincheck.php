<?php
	session_start();

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
		$name;

		if($id != ""){
			if($password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $id && trim($user[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php?name='.$user[2]);
					}
				}

				echo "invalid userid/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid id...";
		}
	}
?>
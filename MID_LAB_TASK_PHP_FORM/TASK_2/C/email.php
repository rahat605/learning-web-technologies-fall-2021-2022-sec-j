<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Email</title>
</head>

<body>
	<form method="get">
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value="<?php
													if (isset($_REQUEST['submit'])) {
														$email = $_REQUEST['email'];
														if ($email == "") {
															echo "null value...";
														} else {
															echo $email;
														}
													}
													?>">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
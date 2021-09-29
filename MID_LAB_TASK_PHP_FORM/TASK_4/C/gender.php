<!DOCTYPE html>
<html>

<head>
    <title>Gender</title>
</head>

<body>    
    <form method="POST">
        <fieldset>  
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender[]" value="Male"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['gender'] == "Male"){
						echo "checked";
					}
				}
			?> > Male
			<input type="radio" name="gender[]" value="Female"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['gender'] == "Female"){
						echo "checked";
					}
				}
			?>
			> Female
			<input type="radio" name="gender[]" value="Other"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['gender'] == "Other"){
						echo "checked";
					}
				}
			?>
			> Other
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
    </form>
</body>

</html>
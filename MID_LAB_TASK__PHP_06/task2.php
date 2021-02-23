<?php

	if(isset($_POST['submit'])){

		
		$password1	=  $_POST['new_password1'];
		$password2  =  $_POST['new_password2'];

		if($password1 = $password2){
			echo "Password Changed";
		}else{
			echo "The passwords did not match";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Password confirmation</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Change Password</legend>
			Current Password :	<input type="password" name="password" value=""> <br>
			New Password : 	<input type="password" name="new_password1" value=""> <br>
							<input type="password" name="new_password2" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
<?php

	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];
		$password	=  $_POST['password'];

		if($name == "" || $password == "")
		{
			echo "Null submission...";
		}
		
		else if (!preg_match('/^[a-zA-Z0-9_]+/', $name) || strlen( $name) < 2)
		{
			echo "Invalid Name \n";
			echo "User Namecan contain alpha numeric characters period,dash or underscore only \n User Namemust contain at leasttwo (2) characters";
		}
		else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password)) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else
		{
			echo "Submission Successfull  !";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name and Password Validation</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Login</legend>
			User Name: 		<input type="text" name="myname" value=""> <br>
			password: 	<input type="password" name="password" value=""> <br>

						<input type="submit" name="submit" value="Submit">
						<input type="checkbox" name="item[]" > Remember Me
						<a href="task2.php"> Forgot Password ?</a>
		</fieldset>
	</form>
</body>
</html>
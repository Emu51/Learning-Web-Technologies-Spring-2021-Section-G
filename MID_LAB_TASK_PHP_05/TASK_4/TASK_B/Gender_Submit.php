<?php

if(isset($_POST['submit'])){

	$gender =  $_POST['gender'];
	if($gender == "" ){
		echo "Null submission...";
	}else{
		echo "Success  !!!   ";
		echo $gender."   is your Gender";
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio"  name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Others"> Others <br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
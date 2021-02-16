<?php

	if(isset($_POST['submit'])){

		$mail 		=  $_POST['mail'];
		

		if($mail == ""){
			echo "Null submission...";
		}else{
			echo $mail;
			echo "<br>";
			
			echo "success";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: 		<input type="Email" name="mail" value=""> <br>
			
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 
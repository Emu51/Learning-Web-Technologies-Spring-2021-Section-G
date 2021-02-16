<!DOCTYPE html>
<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: 		<input type="Email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>"> <br>
			
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
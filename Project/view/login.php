<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body bgcolor="skyblue">
<center>
	<form id="div" method="post" action="../controller/logCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit"> 
						<a href="create.php">Signup</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	</center>
</body>

</html>
<?php
include('footer.php');
?>
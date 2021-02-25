<!DOCTYPE html>
<html>
<head>
	<title> Table Example</title>
</head>
<body>
	<table border="1" width="50%" align="center">
		<tr align="center">
			<td  colspan="3" width="100px" align="Left">
				<img src="logo.png">
			
			<p align="Right">
				<a href="home.html"> Home</a> | 			
				<a href="registration.html"> Registration</a> | 			
				<a href="login.html" >Login</a> | 			
			</p> 			
			</td>
		</tr>
		<tr >
			<td>
				<h2>Account</h2>
				<ul>
					<li><a href="dashboard.php"> Dashboard</a></li>
					<li><a href="view.php"> View Profile</a></li>
					<li><a href="editprofile.html"> Edit Profile</a></li>
					<li><a href="changephoto.html"> Change Profile Picture</a></li>
					<li><a href="changepass.html"> Change Passowrd</a></li>
					<li><a href="logout.html"> Logout </a></li>
				</ul>

			</td>
			<td >
				<p>Welcome , <?php session_start(); echo $_SESSION['username']; ?> </p>

			</td>
			
		</tr>
	
		<tr align="center" >
			<td colspan="3" height="50px">
				Copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>
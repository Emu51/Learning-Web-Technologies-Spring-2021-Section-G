<?php
if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password1	=  $_POST[ 'password1'];
		$password2  =  $_POST['password2'];

		if($name == ""){
			echo "Enter a Name";
		}
		else if(ctype_alnum($name) and $name=="_" and $name=="-" and strlen( $name) < 2){
			echo "Invalid Name \n";
			echo " Name can contain alpha numeric characters period,dash or underscore only \n User Namemust contain at leasttwo (2) characters";
		}
		else if($email==""){
			echo "enter a valid email";
		}
		else if($username==""){
			echo "Enter a valid User Name";
		}
		else if(ctype_alnum($username) and $username=="_" and $username=="-" and strlen( $username) < 2){
			echo "Invalid Name \n";
			echo "User Name can contain alpha numeric characters period,dash or underscore only \n User Namemust contain at leasttwo (2) characters";
		}
		else if($password1 ==""){
			echo "Enter a password";
		}
		else if($password2==""){
			echo "Re-type the password to confirm your password";
		}
		else if ( $password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($password1 != $password2){
			echo "Passwords did not match";
		}
		else {
			echo "Registration Sucessfull !";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Change Password</legend>
			<table border="0" width="50%" align="left">
		<th colspan="2"><h1>Person Profile</h1></th>
<tr>
					<td>Name:<br></td>
					<td colspan="2"> 
					<input type="text" name="name" value="" placeholder="enter your name" />
					</td>
				</tr>
				<tr>
					<td>Email: <br></td>
					
					<td colspan="2"> <input type="email" name="email" placeholder="Enter your email" value="" /> </td>
				</tr>
				
					<tr>
					<td>User Name<br></td>
					<td colspan="2"> 
					<input type="text" name="username" value="" placeholder="enter your username" />
					</td>
				</tr>
				<tr>
					<td>
						Password :
						 
					</td>
					<td>
						<input type="password" name="password1" value="" placeholder="enter your Password"> <br>
					</td>
				</tr>
				<tr><td>
						Confirm Password :	 <br>
					</td>
					<td><input type="password" name="password2" value="" placeholder="re-enter your password"><br></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>  
						<input type="radio" name="gender"> Male
						<input type="radio" name="gender"> Female
						<input type="radio" name="gender"> Other 
					</td>
				</tr>
								<tr>
					<td>Enter Date : </td>
					<td> <input type="date" name="dob" value="" /> </td>
				</tr>
								
								

				<tr>
					<td colspan="3" height="50px"></td>
					
				</tr>

		<tr align="right" >
			<td colspan="3" height="50px">
				<input type="submit" name="submit" value="Submit"> 
						<input type="reset" name="click" value="reset">	
			</td>
		</tr>
	</table>
		</fieldset>
	</form>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password1	=  $_POST[ 'password1'];
		$password2  =  $_POST['password2'];
		$gender = $_POST["gender"];
		$dob = $_POST["dob"];

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
		else if 
			( $password1=="@" ||$password1=="#" || $password1=="$" ||$password1=="%" and strlen($password1)<8) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($password1 != $password2){
			echo "Passwords did not match";
		}
		else if($gender == ""){
			echo "Enter Your Gender";
		}
		else if($dob == ""){
			echo "Enter a Date of Birth";
		}
		else {
			$user = ['username'=> $username, 'password'=> $password1, 'email'=>$email];
			$_SESSION['current_user'] = $user;
			echo "Registration Sucessfull !";
			header('location: home.html');
		}

	}
?>
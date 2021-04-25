<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/db_transaction.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		
	if($username=="" || $password=="" || $repass=="" || $email=="")
	{
		echo "Null submission";
	}	
		if($username == ""){
			echo "Enter a Name";
		}
		else if(ctype_alnum($username) and $username=="_" and $username=="-" and strlen( $username) < 2){
			echo "Invalid Name ";
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
		else if($password ==""){
			echo "Enter a password";
		}
		else if($repass==""){
			echo "Re-type the password to confirm your password";
		}
		else if 
			( $password=="@" ||$password=="#" || $password=="$" ||$password=="%" and strlen($password)<8) 
		{

			echo "\n Invalid password";
			echo "Password must not be less than eight(8) characters \n Password must contain at least one of the special characters (@, #, $, %)";
		}
		else if($password != $repass){
			echo "Passwords did not match";
		}

			else {	
			       
				   header('location: ../view/Login.html');
				   
				  echo $username;
				  echo "<br>";
				  echo $password;
				  echo "<br>";
				  echo $repass;
				  echo "<br>";
				  echo $email;
			
			       $user=[
				          'username'    => $username,                              
						  'password'    => $password,
				          'email'      => $email	   
				   ];
				   
				   $result= insertUser($user);
				   
				   if($result)
				   {
					   header('location: ../view/Login.html');
				   }
			        else
					{
						echo 'Invalid';
					}
			        
				

			}
    



	
			
	}

	


?>
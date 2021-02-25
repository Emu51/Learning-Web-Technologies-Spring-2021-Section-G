<?php
		$username = $_POST['username'];
		$password = $_POST['password'];

	session_start();

	if(isset($_POST['submit']))
	{


		if($username == "" || $password == "")
		{
			echo "Invalid Input";
		}
		else{

			$user = $_SESSION['current_user'];

			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['flag'] = true;
				header('location: dashboard.html');
			}else{
				echo "invalid user...";
			}
		}
	}


?>
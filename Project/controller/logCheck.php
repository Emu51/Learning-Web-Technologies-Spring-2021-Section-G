<?php

	session_start();
	require_once('../model/user_list.php');

	if(isset($_POST['submit'])){

		$username = $_POST['name'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			
			$status = validateUser($username, $password);

			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['name'] = $username;
				$_SESSION['password'] = $password;

				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>
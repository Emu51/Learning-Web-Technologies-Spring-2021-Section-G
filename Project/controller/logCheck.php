<?php

	session_start();
	require_once('../model/db.php');
	require_once('../model/user_list.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$password = $_POST['password'];

		if($name == "" || $password == ""){
			echo "null input...";
		}else{


			$status = validateUser($name, $password);

			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['name'] = $name;
				$_SESSION['password'] = $password;

				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>
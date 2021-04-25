<?php
require_once('../Model/db.php');
require_once('../Model/db_transaction.php');
session_start();

 if(isset($_POST['submit'])){

		$firstname 		=  $_POST['first_name'];
		$lastname	=  $_POST['last_name'];
		$companyname	=  $_POST['company_name'];
		$depositamount	=  $_POST['salary'];
	
if($firstname == "" || $lastname =="" || $companyname == "" || $depositamount == ""){
			echo "Null submission...";
		}
		else{
			echo $firstname;
			echo "<br>";
			echo $lastname;
			echo "<br>";
			echo $companyname;
			echo "<br>";
			echo $depositamount;
			
			$user=[
			       'first_name' =>$firstname,
			       'last_name' =>$lastname,
			       'company_name' =>$companyname,
			       'salary' =>$depositamount
			
			];
			
			echo $user;
			$status= transactionShow($user);
			
			if ($status)
			{
				header('location: ../view/done.html');
				
			}
			else
			{
				echo "error";
			}
			
		}
		header('location: ../view/done.html');

	}


?>
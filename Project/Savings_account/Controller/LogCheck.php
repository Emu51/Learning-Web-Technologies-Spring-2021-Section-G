<?php
 session_start();
 require_once('../Model/db.php');
 require_once('../Model/db_transaction.php');
  if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];
		$password	=  $_POST['password'];
        $AccountNumber=$_POST['AccountNumber'];
		if($name == "" || $password == "" || $AccountNumber==""){
			echo "Null submission...";
		}
		else{
			
		 echo $name;
		 echo "<br>";
		 echo $password;	
		 echo "<br>";
         echo $AccountNumber;
		 header('location: ../view/Transactions.html');
		 
			
			/*$status= validateUser($name,$password,$AccountNumber);
			
			if($status)
			{
				$_SESSION['flag']=true;
				$_SESSION['myname']=$name;
				$_SESSION['password']=$password;
				$_SESSION['AccountNumber']=$AccountNumber;
				
			header('location: ../view/Transactions.html');
			
			}
			
			else
		{   
	        
			echo "Invalid User";
			
		}*/
}
  }
?>


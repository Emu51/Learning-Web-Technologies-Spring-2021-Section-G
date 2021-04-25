<?php
  
  if(isset($_POST['submit']))
  {
  
  
  $name  =$_POST['name'];
  $password  =$_POST['password'];
  $email  =$_POST['email'];

  
 if($name=="" || $password=="" || $email=="" )
  {
	  echo "Null Submission...";
  }
  else{		

				$user = [	
							'name'	    => $name, 
							'password'	=> $password, 
							'email'		=>$email,

						];
			
				$status = insertUser($user);				

				if($status)
				{
					header('location: ../view/login.html');
				
				}
				else{
					echo "error..try again";
				}

				

  }
  }
?>

<?php
        require_once('../Model/db.php');
        require_once('../Model/product.php');
        if(isset($_POST["submit"]))
        {
            $username = $_POST['username'];
			$password = $_POST['password'];
			$repass = $_POST['repass'];
			$email = $_POST['email'];
            $user = 
            [
                'username'=>$username ,
                'password'=>$password,
                'repass'=>$repass,
                'email'=>$email,
                
            ];
            $status= update_user($user);
            if($status)
            {
                header('location: ../View/userlist.php');
            }
            else{
                echo "error..try again";
            }
            
            
        }
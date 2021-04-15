<?php
        require_once('../Model/db.php');
        require_once('../Model/user_list.php');
        if(isset($_POST["update"]))
        {

        $id1 = $_POST['id'];
        $username = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$phone = $_POST['phone'];

            $user = [
                'name'=>$username ,
                'password'=>$password,
                
                'email'=>$email,
                'type'=>$email,
                'Phone'=>$email
                
            ];
            $status= updateUser($user,$id1);
            if($status)
            {
                header('location: ../View/user_list.php');
            }
            else{
                echo "error..try again";
            }
            
            
        }
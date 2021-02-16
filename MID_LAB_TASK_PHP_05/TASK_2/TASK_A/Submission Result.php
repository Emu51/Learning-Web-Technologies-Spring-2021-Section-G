<?php



	if(isset($_POST['submit'])){

		$mail 		=  $_POST['email'];
		

		if($mail == "" ){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?> 
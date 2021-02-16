<?php
	if(isset($_POST['submit'])){

		$degree =  $_POST['degree'];
		if($degree == "" ){
			echo "Null submission...";
		}else{
			echo "Success  !!!   ";
			foreach ($_POST["degree"] as $degree)
			{
					echo $degree."  ";
			}
            echo "   are your Degree";
		}

	}else{
		echo 'invalid request...';
	}


?>
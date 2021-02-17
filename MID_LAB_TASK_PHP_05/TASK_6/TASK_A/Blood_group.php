<?php
	if(isset($_POST['submit'])){

		$bg =  $_POST['bg'];
		if($bg == "" ){
			echo "Null submission...";
		}else if($bg == "1" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG A+";
		}
		else if($bg == "2" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG A-";
		}
		else if($bg == "3" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG B-";
		}
		else if($bg == "4" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG B+";
		}
		else if($bg == "5" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG O+";
		}
		else if($bg == "6" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG O-";
		}
		else if($bg == "7" )		
		{
			echo "Success  !!!   ";			
            echo "  your BG AB+";
		}

	}else{
		echo 'invalid request...';
	}


?>
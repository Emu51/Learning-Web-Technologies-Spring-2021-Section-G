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

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input field</title>
</head>
<body>
	<form method="POST" action="#">
	<fieldset>
			<legend>Blood Group </legend>


			<select id="bg" name="bg">
				<option value="def">  Select Group  </option>
				<option value="1">A+</option>
				<option value="2">A-</option>
				<option value="3">B-</option>
				<option value="4">B+</option>
				<option value="5">O+</option>
				<option value="6">O-</option>
				<option value="7">AB+</option>
	
			</select>

			
			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
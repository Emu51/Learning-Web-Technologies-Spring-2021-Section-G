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
			<legend>Degree</legend>
			<input type="checkbox"  name="degree[]" value="SSC">SSC
			<input type="checkbox" name="degree[]" value="HSC">HSC
			<input type="checkbox" name="degree[]" value="BSC">BSC
			<input type="checkbox" name="degree[]" value="MSC"> MSC <br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
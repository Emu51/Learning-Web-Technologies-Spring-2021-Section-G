<?php

if(isset($_POST['submit'])){

	$date =  $_POST['myday'];
	$month= $_POST['mymonth'];
	$year= $_POST['myyear'];
	if($date == "" || $month=="" || $year==""){
		echo "Null submission...";
	}else{
		echo "Success  !!!   ";
		echo $date." ".$month." ".$year."   is your DOB";

	}

}else{
	echo 'invalid request...';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			DD<input type="textarea" width="80px" name="myday" value=""> 
			MM<input type="textarea" name="mymonth" value="">
			YY<input type="textarea" name="myyear" value=""> <br> <br>
			<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>
</body>
</html>
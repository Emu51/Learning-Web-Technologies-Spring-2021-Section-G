<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Table Example</title>
</head>
<body bgcolor="DarkGrey">
	<table border="0" width="50%" align="center">
		<tr align="center">
			<td  colspan="3" width="100px" align="Left">
				<a href="index.php">
					
				
				<img  src="logo.png" height="250" width="250">
			</a>
			<p align="Right">

				<a href="../controller/logout.php"> Logout</a>
			
			</p> 			
			</td>
		</tr>
		<tr align="left" height="300px">
			<td>
				<h2>Welcome To Kash </h2>


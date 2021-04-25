<?php 
    session_start();
	if(isset($_SESSION['flag'])){
?>

<html>
<head>
<title>Home Page</title>
</head>
<body bgcolor="skyblue">
<center>
<img src="logo.png" width="150px" height="150px" alt="LOGO">

<h1>Welcome to Kash</h1><br>
<a href="logout.php">Logout</a>
</center>
</body>
</html>

<?php		
	}else{
		header('location: login.html');
	}

?>






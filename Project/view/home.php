<?php

	$title = "Home Page";
	include('header.php');
?>
	
	<h1>Welcome home, <?php echo $_SESSION['name']; ?></h1>
	
	<a href="../Savings_account/view/SignUp.html"> Create User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logout.php"> Logout</a>

<?php
	include('footer.php');
?>

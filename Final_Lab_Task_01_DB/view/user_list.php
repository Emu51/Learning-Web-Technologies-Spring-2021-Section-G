<?php
	$title = "User List Page";
	include('header.php');
	require_once('../model/db.php');


	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	

	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Email</td>
				<td>Type</td>
			</tr>";

	while ($row = getAllUser()) {

		echo 	"<tr>
					<td>{$row['id']}</td>
					<td>{$row['username']}</td>
					<td>{$row['email']}</td>
					<td>{$row['type']}</td>
				</tr>";
	}

	echo "</table>";


	include('footer.php');
?>
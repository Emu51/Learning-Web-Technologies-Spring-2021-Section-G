<?php
	$title = "User List Page";
	include('header.php');

	require('../model/db.php');
	$sql="select * from users";
	$conn = getConnection();
	$users_obj=mysqli_query($conn, $sql);

	
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	
	<?php 
		echo "<table border='1'>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Phone</td>
		</tr>";
		
while($row=mysqli_fetch_assoc($users_obj)){
	echo "
			<tr>
				<td>{$row['id']}</td>
				<td>{$row['name']}</td>
				<td>{$row['password']}</td>
				<td>{$row['email']}</td>
				<td>{$row['type']}</td>
				<td>{$row['Phone']}</td>

				<td><a href='edit.php'>edit</a> |
				<a href='../controller/delete.php}'>delete</a>
				</td>
				</tr>
		";

		//?id={$row['ID']}
}

	echo "</table>";

	$p=mysqli_fetch_assoc($users_obj);

	print_r($p);

?>






<?php
	include('footer.php');
?>
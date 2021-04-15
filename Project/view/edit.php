<?php
	$title = "Edit Page";
	include('header.php');


?>

	<form method="post" action="../controller/edit_user.php">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="number" name="id" value=""></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><input type="text" name="type" value=""></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="Phone" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="update" value="Update"> 
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>
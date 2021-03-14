	<!DOCTYPE html>
	<body>
		<table>
			<tr>
				<td>
					<h1>Welcome home, <?php echo $_SESSION['current_user']['username']; ?></h1>
				</td>
			</tr>
			<tr>
				<td>
					<a href="create.php">Profile</a> |
				</td>
			</tr>
			<tr>
				<td>
					<a href="create.php">Change Password</a> |
				</td>
			</tr>
			<tr>
				<td>
					<a href="viewuser.php"> View Users</a> |
				</td>
			</tr>
			<tr>
				<td>
					<a href="logout.php"> Logout</a> |
				</td>
			</tr>

		</table>
	</body>
	<h1>Welcome home, <?php echo $_SESSION['current_user']['username']; ?></h1>
	
	<a href="create.php"> Create User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logout.php"> Logout</a>
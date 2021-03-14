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
					<a href="profile.php">Profile</a> |
				</td>
			</tr>
			<tr>
				<td>
					<a href="changepassowrd.php">Change Password</a> |
				</td>
			</tr>
			
			<tr>
				<td>
					<a href="logout.php"> Logout</a> |
				</td>
			</tr>

		</table>
	</body>
	
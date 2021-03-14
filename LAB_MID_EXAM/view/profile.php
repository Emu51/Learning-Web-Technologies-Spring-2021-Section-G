<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table>
		<tr>
			<th>
				Profile
			</th>
		</tr>
		<tr>
			<td>
				ID : 
			</td>
			<td>
				<?php echo $_SESSION['current_user']['ID']; ?>
			</td>
		</tr>
<tr>
			<td>
				Name : 
			</td>
			<td>
				<?php echo $_SESSION['current_user']['username']; ?>
			</td>
		</tr>
		<tr>
			<td>
				User Type : 
			</td>
			<td>
				<?php echo $_SESSION['current_user']['usertype']; ?>
			</td>
		</tr>
	</table>

</body>
</html>
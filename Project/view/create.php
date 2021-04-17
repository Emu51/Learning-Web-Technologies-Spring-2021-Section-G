<?php
	$title = "Create Page";
	include('header.php');
	
?>
<form method="post" action="../controller/regCheck.php">
	<fieldset>
		<legend>Create User</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="repass" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
		 <td>
		 Account Type :
		</td>
		 <td><select type= "dropdown" name="dropdown">
                        <option selected>Please Select</option>
			            <option name="type" value = "saving_account" >Savings Account</option>
                        <option name="type" value = "students_account">Salary Account</option>
						<option name="type" value = "DPS_account" >Fix deposit Account</option>
						
						</select>
					    <br>
					</td> 
		
		 </tr>
		 <tr>
		 <td>
		Telephone Number: 
		</td>
		<td>
			<input type="number" Name="phone"/>
		</td>	
        <br>
		
		 </tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="signup" value="Create"> 
					<a href="home.php">Back	</a>
				</td>
			</tr>
		</table>
	</fieldset>
</form>

<?php
	include('footer.php');
?>
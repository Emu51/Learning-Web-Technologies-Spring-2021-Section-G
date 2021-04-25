<!DOCTYPE html>
<html>

   <head>
      <title>Deposit Form</title>
	  <script type="text/javascript" src="DepScript.js"></script>
   </head>
   <body bgcolor="MediumSeaGreen">
   <center>
   <img src="logo.png" width="150px" height="150px" alt="LOGO">
	
   <body>
   <h1>DEPOSIT FORM</h1>
   <table>
      <form name="DepoForm" method="POST" action="../Controller/DepositCheck.php" onsubmit="return validateForm()" >
         <tr>
		   <td>First name: </td>
			<td><input type = "text" name = "first_name" value=""/><br></td>
		</tr>
		 <tr>
            <td>Last name: </td>
         <td><input type = "text" name = "last_name" value="" /><br>
		 </td>
		 </tr>
		 <tr>
		 <td>Company Name: </td>
		 <td><input type = "text" name = "company_name" value="" /><br>
		 </td>
		 </tr>
		 <tr>
		 <td>Deposit Amount: </td>
         <td><input type = "text" name = "salary" placeholder="Taka" value=""/><br>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 Anything else we should know?<br>
		 <textarea rowspan = "5" colspan = "50" name = "description">
         </textarea>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 <input type="checkbox" name="Term & Conditions" value="on" required>I agree to terms and conditions*
		 </td>
		 </tr>
		 
		 <tr>
		 <td>
		 An invoice reflecting the deposit will be sent to you shortly.

         Thank you!
		 </td>
		 </tr>
		 
		 <tr>
		 <td>
		 <input type = "submit" name = "submit" value = "Submit" />
		 </td>
		 </tr>
		 </table>
      </form>
	  </center>
   </body>
</html>	





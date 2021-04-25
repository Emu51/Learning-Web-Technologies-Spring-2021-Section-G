
<!DOCTYPE html>
<html>

   <head>
      <title>Withdrawal Form</title>
	  <script type="text/javascript" src="WidScript.js"></script>
   </head>
   <body bgcolor="MediumSeaGreen">
   <center>
   <img src="logo.png" width="150px" height="150px" alt="LOGO">
	
   <body>
   <h1>WITHDRAWAL FORM</h1>
   <table>
      <form name="WidForm" method="POST" action="withdraw.php" onsubmit="return validateForm()">
         <tr>
		 <td>First name:</td>
		 <td><input type = "text" name = "first_name" value=""/><br>
		 </td>
		 </tr>
		 <tr>
         <td>Last name:</td>
		 <td><input type = "text" name = "last_name" value="" /><br>
		 </td>
		 </tr>
		 <tr>
		 <td>Company Name:</td>
		 <td>
		 <input type = "text" name = "company_name" value="" /><br>
		 </td>
		 </tr>
		 <tr>
		 <td>Withdrawal Amount:</td>
		 <td>
		 <input type = "text" name = "salary" placeholder="Taka" value=""/>
         <br>
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
		 <input type="checkbox" name="Term & Conditions" value="on" required>I agree to terms and conditions
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

<?php
$username = "localhost";
$location="root";
$password ="";
$dbname="webtech";
 
error_reporting(0);
		$firstname 		=  $_POST['first_name'];
		$lastname	=  $_POST['last_name'];
		$companyname	=  $_POST['company_name'];
		$Withdrawalamount	=  $_POST['salary'];
		$connect=mysqli_connect('localhost','root','','webtech');
		if($connect )
		{if (isset($_POST['submit'])){
		  $q="INSERT INTO transaction (first_name,last_name,company_name,salary) VALUES ('$firstname','$lastname','$companyname','$Withdrawalamount')";
		   $res=mysqli_query($connect,$q);
		   if($res){
		  
		   echo "Successfully done";
		   header('location: ../view/done.html');
		   }
		   else{
		   
		   echo "Invalid";
		   }
        }
		}
		
	


	?>
    





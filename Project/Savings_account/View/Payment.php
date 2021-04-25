<!DOCTYPE html>
<html>

   <head>
      <title>Payment Form</title>
	  <script type="text/javascript" src="PayScript.js"></script>
   </head>
   <body bgcolor="MediumSeaGreen">
   <center>
   <img src="logo.png" width="150px" height="150px" alt="LOGO">
	
   <body>
   <h1>PAYMENT FORM</h1>
   <table>
      <form name="PayForm" method="post" action="Payment.php" onsubmit="return validateForm()">
         <tr>
		 <td>
		 First name:<input type = "text" name = "first_name" value=""/><br>
		 </td>
		 </tr>
		 <tr>
         <td>
		 Last name: <input type = "text" name = "last_name" value="" /><br>
		 </td>
		 </tr>
		 <tr>
         <td>
		 Email: <input type = "email" name = "Email" value="" /><br>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 Shipping Address:<br>
		 <textarea rowspan = "5" colspan = "50" name = "description"></textarea>
		 </td>
		 </tr>
		 <tr>
		 <td>
         Mobile Number: <input type = "numerical" name = "number"  value=""/>
         <br>
		 </td>
		 </tr>
		 <tr>
		 <td>
         Account Number: <input type = "real number" name = "ANumber" placeholder="ex:2XXXX48"  value=""/>
         <br>
		 </td>
		 </tr>
		 <tr>
		 <td>
         Mode of payment:<select type= "dropdown" name="dropdown" value="">
                        <option value = " " selected></option>
			            <option value = "Cash" >Cash</option>
                        <option value = "Credit Card">Credit Card</option>
						<option value = "Debit Card" >Debit Card</option>
						<option value = "Checks" >Checks</option>
						<option value = "mobile payments" >Mobile Payment</option>
						</select>
					    <br>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 Date of Payment: <input type="Date" Name="Date" value=""/>
		<br>
		</td>
		</tr>
		 <tr>
		 <td>
		 My Products:<br>
		 <input type="checkbox" Name="Products" value="Product 1"/>Product 1<br>
		 <input type="checkbox" Name="Products" value="Product 2"/>Product 2<br>
		 <input type="checkbox" Name="Products" value="Product 3"/>Product 3<br>
		 </td>
		 </tr>
		 <tr>
		 <td>
		 In Total: <input type="numerical" rowspan="2" colspan="3"  />
		 </td>
		 </tr>
		 <tr>
		 <td>
		 <input type = "submit" name = "payment" value = "Proceed to payment" /><br>
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
		$firstname      =$_POST['first_name'];
		$lastname       =$_POST['last_name'];
		$Email          =$_POST['Email'];
		$ShippingAddress=$_POST['description'];
		$MobileNumber   =$_POST['number'];
		$AccountNumber    =$_POST['AccountNumber'];
		$ModeOfPayment  =$_POST['dropdown'];
		$DateOfPayment  =$_POST['Date'];
		$MyProduct     =$_POST['Products'];
		$connect=mysqli_connect('localhost','root','','webtech');
		if($connect )
		{if (isset($_POST['payment'])){
		  $q="INSERT INTO payment (first_name,Email,description,number,AccountNumber,dropdown,Date,Products) VALUES ('$firstname','$lastname','$Email','$ShippingAddress','$MobileNumber','$AccountNumber','$ModeOfPayment','$DateOfPayment',$MyProduct)";
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
    


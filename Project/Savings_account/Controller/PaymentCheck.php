<?php
 
 if(isset($_POST['payment'])){

		$firstname      =$_POST['first_name'];
		$lastname       =$_POST['last_name'];
		$Email          =$_POST['Email'];
		$ShippingAddress=$_POST['description'];
		$MobileNumber   =$_POST['number'];
		$AccountNumber    =$_POST['AccountNumber'];
		$ModeOfPayment  =$_POST['dropdown'];
		$DateOfPayment  =$_POST['Date'];
		$MyProduct     =$_POST['Products'];
		
	
if($firstname == "" || $lastname =="" || $Email == " " || $ShippingAddress == "" || $MobileNumber == "" || $AccountNumber =="" || 
    $ModeOfPayment == " " || $DateOfPayment == "" || $MyProduct==""  )
	{
			echo "Null submission...";
			
		}else{
			echo $firstname;
			echo "<br>";
			echo $lastname;
			echo "<br>";
			echo $Email;
			echo "<br>";
			echo $ShippingAddress;
			echo "<br>";
			echo $MobileNumber;
			echo "<br>";
			echo $AccountNumber;
			echo "<br>";
			echo $ModeOfPayment;
			echo "<br>";
			echo $DateOfPayment;
			echo "<br>";
			echo $MyProduct;
			
			
			
			
			
		}

	}


?>
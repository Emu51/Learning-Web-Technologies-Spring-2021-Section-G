function validateForm()
	{
	   let fname= document.forms["PayForm"] ["first_name"].value;
	   if(fname=="")
	   {
	     alert("First Name is required");
		 return false;
	   
	   }
	   
	  let email= document.forms["PayForm"] ["Email"].value;
	   if(email=="")
	   {
	     alert("Email is required");
		 return false;
	   
	   }
	   
	   let shipad =document.forms["PayForm"]["description"].value;
	   if(shipad=="")
	   {
	     alert("Payment can not be done without Shipping Address!");
	     return false;
	   }
	   
	   let mNumber=document.forms["PayForm"]["number"].value;
	   
	  if(mNumber=="")
	   {
	     alert("Enter your mobile number.");
	     return false;
	   }
	   let aNumber=document.forms["PayForm"]["ANumber"].value;
	   
	  if(aNumber=="")
	   {
	     alert("Transaction can not be done without Account Number!");
	     return false;
	   }
		   
	   else if(aNumber.length!=4)
	   {
	     alert("Account Number must be in 4 characters");
	     return false;
	   }
	   
	   let modePay=document.forms["PayForm"]["dropdown"].value;
	   if(PayForm.dropdown.seletedIndex=="")
	   {
		   alert("You must select the mode of payment!")
		   PayForm.dropdown.focus();
		   return false;
		   
	   }
	   let date=document.forms["PayForm"]["Date"].value;
	   if(date=="")
	   {
		   alert("You must select the date of payment")
		   return false;
	   }
	   /*let product=document.forms["PayForm"]["Products"].value;
	   if(product=="")
	   {
		   alert("You must select an item!")
		   return false;
	   }*/
	   
	   
	   } 
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

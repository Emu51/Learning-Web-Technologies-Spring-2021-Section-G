function validateForm()
	{
	   let name= document.forms["myForm"]["myname"].value;
	   if(name=="")
	   {
	     alert("Name is required");
		 return false;
	   
	   }
	   
	  let password= document.forms["myForm"]["password"].value;
	   if(password=="")
	   {
	     alert("Password is required");
		 return false;
	   
	   }
	   
	   else if(password.length <=5)
	   {
	      alert("Password must be longer than 5 characters");
		  
		  return false;
	   }
	   
	   let AccountNumber=document.forms["myForm"]["AccountNumber"].value;
	   if(AccountNumber=="")
	   {
	     alert("Account Number is required");
	     return false;
	   }
	   
	  else if(AccountNumber.length!=4)
	   {
	     alert("Account Number must be in 4 characters");
	     return false;
	   }
	   }
		

function validateForm()
	{
	   let fname= document.forms["DepoForm"] ["first_name"].value;
	   if(fname=="")
	   {
	     alert("First Name is required");
		 return false;
	   
	   }
	   
	  let cname= document.forms["DepoForm"] ["company_name"].value;
	   if(cname=="")
	   {
	     alert("Company Name is required");
		 return false;
	   
	   }
	   
	   let damount=document.forms["DepoForm"]["salary"].value;
	   if(damount=="")
	   {
	     alert("Deposit amount can not be Null");
	     return false;
	   }
	   
	  else if(damount.length >=8)
	   {
	     alert("You can not deposit this much amount via online");
	     return false;
	   }
	   } 
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

function validateForm()
	{
	   let fname= document.forms["WidForm"] ["first_name"].value;
	   if(fname=="")
	   {
	     alert("First Name is required");
		 return false;
	   
	   }
	   
	  let cname= document.forms["WidForm"] ["company_name"].value;
	   if(cname=="")
	   {
	     alert("Company Name is required");
		 return false;
	   
	   }
	   
	   let wamount=document.forms["WidForm"]["salary"].value;
	   if(wamount=="")
	   {
	     alert("Withdrawal amount can not be Null");
	     return false;
	   }
	   
	  else if(wamount.length >=8)
	   {
	     alert("You can not withdraw this much amount at a time");
	     return false;
	   }
	   } 
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

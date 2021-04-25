<script>
 function validateRegistraion()
{
	var username =document.getElementById('username').value;
	var pass     =document.getElementById('password').value;
	
	if(username=="")
	{
		alert("User Name is Required");
		return false;
		
	}
	else{
		return true;
	}
	
	
	
	
	
	
	
	
}
function formValidate(thisForm)								 
{ 
	if (thisForm.name.value == "")								 
	{ 
		alert("Please enter travel package name."); 
		thisForm.name.focus(); 
		return false; 
	} 

	if (thisForm.location.value == "")								 
	{ 
		alert("Please enter the location."); 
		thisForm.location.focus(); 
		return false; 
	} 
	
	if (thisForm.price.value == "")								 
	{ 
		alert("Please enter price."); 
		thisForm.price.focus(); 
		return false; 
	} 
	
	return true; 
}
function formValidate()								 
{ 
	var name = document.forms["uform"]["name"].value;			 
	var location = document.forms["uform"]["location"],value; 
	var price = document.forms["uform"]["price"].value; 
	

	if (name.value == "")								 
	{ 
		window.alert("Please enter travel package name."); 
		name.focus(); 
		return false; 
	} 

	if (location.value == "")								 
	{ 
		window.alert("Please enter the location."); 
		location.focus(); 
		return false; 
	} 
	
	if (price.value == "")								 
	{ 
		window.alert("Please enter price."); 
		price.focus(); 
		return false; 
	} 
	
	return true; 
}
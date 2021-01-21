function NotifyRed(inputField){
	inputField.style.backgroundColor="#F3A290";
	inputField.placeholder = "";

	if(inputField.type == "checkbox"){
		//review balik nanti
		inputField.parentNode.style.backgroundColor="#F3A290";
	}
}

function makeWhite(inputField){
	inputField.style.backgroundColor="white";
}

function isBlank(inputField){
	if(inputField.type =="checkbox"){
		if(inputField.checked){
			return false;
		}
		return true;
	}
	if(inputField.value ==""){
		return true;
	}
	return false;
}

function message(inputField){
	var newInputField = inputField.parentNode.getAttribute("id");
	if( newInputField == "emailSection"){
		/*var node = document.createElement("P");
		var errorMessage = document.createTextNode("Please enter an email address.");
		node.appendChild(errorMessage);
		inputField.parentNode.appendChild(node);*/
		var x = document.getElementById("emailErrorMsg").value;
		document.getElementById("showEmailMessage").innerHTML = x;
	}
	else if ( newInputField == "passwordSection"){
		/*var node = document.createElement("P");
		var errorMessage = document.createTextNode("Please enter password.");
		node.appendChild(errorMessage);
		inputField.parentNode.appendChild(node);*/
		var x = document.getElementById("passwordErrorMsg").value;
		document.getElementById("showPasswordMessage").innerHTML = x;
	}
}

function deleteMessage(inputField){
	var newInputField = inputField.parentNode.getAttribute("id");
	if( newInputField == "emailSection"){
		//inputField.parentNode.removeChild(inputField.parentNode.lastChild);
		//var x = document.getElementById("emailErrorMsg").value;
		document.getElementById("showEmailMessage").innerHTML = "";
	}
	else if ( newInputField == "passwordSection"){
		//inputField.parentNode.removeChild(inputField.parentNode.lastChild);
		document.getElementById("showPasswordMessage").innerHTML = "";
	}
}

window.onload=function(){
	var form=document.getElementById("signupForm");
	form.onsubmit=function(e){
		var requiredInput = document.querySelectorAll(".required"); 
		for(var i=0; i<requiredInput.length;i++){
			if(isBlank(requiredInput[i])){
				e.preventDefault(); 
				NotifyRed(requiredInput[i]);
				message(requiredInput[i]);
			}
			else{
				makeWhite(requiredInput[i]);
				deleteMessage(requiredInput[i]);			
			}
		}	
	}
	//alert("Thank you for signing up with WanderLust!");
}


function NotifyRed(inputField){
	inputField.style.backgroundColor="#F3A290";
	inputField.placeholder = "";

	if(inputField.type == "file"){
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
	var newInputField = inputField.parentNode.getAttribute("class");
	if( newInputField == "requiredSection"){
		var x = document.getElementById("requiredErrorMessage").value;
		document.getElementById("showErrorMessage").innerHTML = x;
	}
}

function deleteMessage(inputField){
	var newInputField = inputField.parentNode.getAttribute("class");
	if( newInputField == "requiredSection"){
		document.getElementById("showErrorMessage").innerHTML = "";
	}
}
	
window.onload=function(){
	var form=document.getElementById("travelagentForm");
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
}

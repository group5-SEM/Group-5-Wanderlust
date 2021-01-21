function makeRed(inputDiv) {
	inputDiv.style.border="solid 1px red";
}

function makeClean(inputDiv) {
	inputDiv.style.removeProperty("border");
	
}

//to check if any required input is blank
function isBlank(inputDiv) {
	if(inputDiv.value=="") {
		alert("Cannot leave the field empty");
		return true; 
		
	}
	return false;
}

window.onload=function() {
	var mainForm=document.getElementById("update-form");
	
	mainForm.onsubmit=function(e) {
		var requiredInputs = document.querySelectorAll(".required-input");
		
		for(var i=0; i<requiredInputs.length; i++) {
			if(isBlank(requiredInputs[i])) {
				e.preventDefault();
				
				makeRed(requiredInputs[i]);
				
			}
			else {
				makeClean(requiredInputs[i]);
			}
		}
	}
}


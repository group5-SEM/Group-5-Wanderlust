function checkEmpty(event) {
	var name = document.getElementById("name").value;
	var desc = document.getElementById("desc").value;
	var price = document.getElementById("price").value;
	
	if (name == "" || price == "" || desc == "") {
		alert('Please fill up all entries!');
		event.preventDefault();
	}
}
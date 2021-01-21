function checkEmpty(event) {
	var name = document.getElementById("name").value;
	var location = document.getElementById("location").value;
	var price = document.getElementById("price").value;
	var desc = document.getElementById("desc").value;
	
	if (name == "" || location == "" || price == "" || desc == "") {
		alert('Please fill up all entries!');
		event.preventDefault();
	}
}
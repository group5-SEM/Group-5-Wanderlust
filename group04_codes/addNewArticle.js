function checkEmpty(event) {
	var title = document.getElementById("title").value;
	var desc = document.getElementById("desc").value;
	var link = document.getElementById("link").value;
	
	if (title == "" || desc == "" || link == "") {
		alert('Please fill up all entries!');
		event.preventDefault();
	}
}
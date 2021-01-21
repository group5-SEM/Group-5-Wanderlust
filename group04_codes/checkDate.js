function checkDate(event) {
	var todayDate = new Date();
	var dd = todayDate.getDate();
	var mm = todayDate.getMonth()+1; //January is 0!
	var yyyy = todayDate.getFullYear();

	if(dd<10){
		dd='0'+dd
	} 
	if(mm<10){
		mm='0'+mm
	} 

	todayDate = yyyy+'-'+mm+'-'+dd;
	
	var givenDate = document.getElementsByClassName("datefield");
	var i;
	for(i=0; i<givenDate.length;i++){
		if(givenDate[i].value != "")
		{
			if(givenDate[i].value < todayDate){
				alert('Cannot choose past date!');
				event.preventDefault();
			}
			if(givenDate[i].value == todayDate){
				var todayTime = new Date();
				var time = todayTime.getHours() + ":" + todayTime.getMinutes() + ":" + todayTime.getSeconds();
				
				var givenTime = document.getElementsByClassName("timefield");

				if(givenTime[i].value < time){
					alert('Cannot choose past time!');
					event.preventDefault();
				}
			}
		}
	}
}
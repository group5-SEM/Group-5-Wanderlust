<?php

//function


//isset
if (isset($_POST['update'])) {
//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');
	
    $Name = $_POST['name'];
    $Agency = $_POST['Agency'];
    $ContactNum = $_POST['ContactNum'];
	$Address = $_POST['Address'];
	$TravelAgentId = $_POST['TravelAgentId'];
	$Email = $_POST['Email'];
	
	//echo $Email;
	//echo $Name;

//update query
$TravelAgentId = isset($_POST['TravelAgentId']) ? $_POST['TravelAgentId'] : '';
//echo $TravelAgentId;

$sql = "UPDATE travelagent set Name='".$Name."', Agency='".$Agency."', ContactNum='".$ContactNum."', Address='".$Address."' WHERE TravelAgentId=$TravelAgentId ";
//$sql = "UPDATE travelagent set Name='".$Name."' WHERE TravelAgentId=$TravelAgentId ";

//echo $Email;
//echo $Name;

//execute the query
if(mysqli_query($con, $sql)){
	header('Location:travelagent4.php?email='.$Email);
	exit;
}
else
	echo"Not updated";

}

?>
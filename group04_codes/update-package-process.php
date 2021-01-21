<?php

//function


//isset
if (isset($_POST['update'])) {
//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');
	
    $Name = $_POST['name'];
    $Location = $_POST['location'];
    $Price = $_POST['price'];
	$PackageDescription = $_POST['description'];
	$id = $_POST['id'];
	//$TravelAgentId = $_POST['travelagentid'];
	$Email = $_POST['email'];
	
	//echo $Email;
	//echo $id;

//update query
$id = isset($_POST['id']) ? $_POST['id'] : '';


$sql = "UPDATE package set Name='".$Name."', Location='".$Location."', Price='".$Price."', PackageDescription='".$PackageDescription."' WHERE Id=$id ";

//execute the query
if(mysqli_query($con, $sql)){
	header('Location:travelagent4.php?email='.$Email);
	exit;
}
else
	echo"Not updated";

}

?>
<?php

define('DBCONNECTION','mysql:host=localhost;dbname=group04_db');
define('DBUSER','root');
define('DBPASS','');

//connect to db
function setConnectionInfo($values=array()){ 
	$connString=$values[0];
	$user=$values[1];
	$password=$values[2];
	$pdo=new PDO($connString,$user,$password); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$email=$_POST['email'];
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS)); 
	$sql = "SELECT Id from customer WHERE Email = '$email'";
	$id = $pdo->query($sql)->fetch();
	$id = $id[0];
}


$sql = "INSERT INTO customeractivity (CustomerActivityId, Id, ActivityId, ActivityDate, ActivityTime) 
VALUES (NULL, $id, '$_POST[actId]',  '$_POST[date]', '$_POST[time]')";
$pdo->prepare($sql)->execute([NULL, $id, '$_POST[actId]', '$_POST[date]', '$_POST[time]']);
header("Location: activities.php?email=".$_POST["email"]);
echo "<script> alert('Successfully Added!'); </script>";



?>
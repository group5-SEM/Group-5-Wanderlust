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

if(isset($_FILES['img'])){
	$data=file_get_contents($_FILES['img']['tmp_name']);
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS)); 
	$sql = "INSERT INTO activity (ActivityId, ActivityName, ActivityDescription, ActivityPrice, ActivityImage) VALUES (NULL, '$_POST[name]', '$_POST[desc]', '$_POST[price]', ?)";
	$statement=$pdo->prepare($sql);
	$statement->bindParam(1,$data);
	
	if($statement->execute())
		header("Location:C-activities.php");
}
else {
	echo "Image not set";
}
?>
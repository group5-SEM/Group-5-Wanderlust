<?php

function setConnectionInfo($values=array()){
	$connString=$values[0];
	$user=$values[1];
	$password=$values[2];
	$pdo= new PDO($connString, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

function readCustomerName($customerID){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql='SELECT Name FROM customer WHERE Id = ?';
	$statement=$pdo->prepare($sql);
	$statement->execute([$customerID]);
	return $statement;
}

function readDate($customerID){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql='SELECT DISTINCT(ActivityDate) FROM customerActivity 
	WHERE customeractivity.Id = ? ORDER BY ActivityDate ASC';
	$statement=$pdo->prepare($sql);
	$statement->execute([$customerID]);
	return $statement;
}

function readCustomerActivity($customerID, $date){ //by sppecific customers and specific date
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql='SELECT ActivityTime, ActivityName, ActivityPrice, ActivityImage, CustomerActivityId
	FROM activity, customeractivity WHERE customeractivity.Id = ? AND 
	customeractivity.ActivityId = activity.ActivityId AND ActivityDate = ? 
	ORDER BY ActivityTime ASC';
	$statement=$pdo->prepare($sql);
	$statement->execute([$customerID, $date]);
	return $statement;
}

function readActivities(){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql='SELECT * FROM activity';
	$statement=$pdo->query($sql);
	return $statement;
}

function readCustomerId($email){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql = "SELECT Id FROM customer WHERE Email = ?";
	$statement=$pdo->prepare($sql);
	$statement->execute([$email]);
	return $statement;
}

function randomArticle(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT * FROM article ORDER BY RAND() LIMIT 2';
	$statement=$pdo->query($sql);
	return $statement;
}









?>
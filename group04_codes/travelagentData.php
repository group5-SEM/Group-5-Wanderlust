<?php
define('DBCONNECTION','mysql:host=localhost;dbname=group04_db');
define('DBUSER','root');
define('DBPASS','');

//connecting to the database
function setConnectionInfo($value=array()){
	$connString=$value[0];
	$user=$value[1];
	$password=$value[2];
	try{
		$pdo=new PDO($connString,$user, $password); //the part that actually connect to the database
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}

function viewTravelAgentInfo($email){
	$_POST['email']=$email;
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Name, ContactNum, Address, Email FROM travelagent WHERE Email='$_POST[email]'";
	$statement=$pdo->prepare($sql);
	$statement->execute();
	return $statement;
}

function viewAgentImage($email){
	$_POST['email']=$email;
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT ProfilePic FROM travelagent WHERE Email='$_POST[email]'";
	$blob= $pdo->query($sql);
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function getProfile($name){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Name, ContactNum, Address FROM travelagent WHERE Name='".$name."'";
	$statement=$pdo->prepare($sql);
	$statement->execute();
	return $statement;
}

function getAgentPackageName($name){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	//SELECT package.Name FROM `package`,`travelagent` WHERE package.travelAgentId = travelagent.travelAgentId AND travelagent.name = 'Noratiqah binti Adib'
	$sql="SELECT package.Name FROM package, travelagent WHERE package.travelAgentId = travelagent.travelAgentId AND travelagent.Name='".$name."' AND package.RequestStatus='apprv'"; 
	$blob= $pdo->query($sql);
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {

	}
	return $image;
}

function getAgentPackageImage($name){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	//SELECT package.Name FROM `package`,`travelagent` WHERE package.travelAgentId = travelagent.travelAgentId AND travelagent.name = 'Noratiqah binti Adib'
	$sql="SELECT package.PackageImage FROM package, travelagent WHERE package.travelAgentId = travelagent.travelAgentId AND travelagent.name='".$name."' AND package.RequestStatus='apprv'"; //where admin approve
	$blob= $pdo->query($sql);
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {

	}
	return $image;
}

function getAgentImage($name){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT ProfilePic FROM travelagent WHERE Name='".$name."'";
	$blob= $pdo->query($sql);
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}
?>



















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

function viewPackageImage(){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT PackageImage FROM package WHERE RequestStatus='apprv'"; //where admin approve
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;

}

function viewPackageName(){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Name FROM package WHERE RequestStatus='apprv'"; //where admin approve
	$blob= $pdo->query($sql);
	foreach ($result=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
	
	}
	return $result;
}

function viewSelectedPackage($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT PackageImage FROM package WHERE Name='".$package."'";
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function viewSelectedInfo($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT travelagent.Name, package.Name, package.Price, package.PackageDescription FROM package, travelagent WHERE package.travelagentId = travelagent.travelAgentId AND package.Name='".$package."'";
	$statement=$pdo->prepare($sql);
	$statement->execute();
	return $statement;
}

function viewImage1($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Image1 FROM package WHERE Name='".$package."'";
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		$image = '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function viewImage2($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Image2 FROM package WHERE Name='".$package."'";
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		$image = '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function viewImage3($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Image3 FROM package WHERE Name='".$package."'";
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		$image = '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function viewImage4($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Image4 FROM package WHERE Name='".$package."'";
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		$image = '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function viewImage5($package){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Image5 FROM package WHERE Name='".$package."'"; 
	$blob= $pdo->query($sql);
	
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		$image = '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function searchPackageImage($search){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT PackageImage FROM package WHERE Name LIKE '%".$search."%' OR Location LIKE '%".$search."%' AND RequestStatus= 'apprv' ORDER BY Name"; //where admin approve
	$blob= $pdo->query($sql);
	foreach ($image=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
		//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row ).'"/><br>';
	}
	return $image;
}

function searchPackageName($search){
	$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
	$sql="SELECT Name FROM package WHERE Name LIKE '%".$search."%' OR Location LIKE '%".$search."%' AND RequestStatus= 'apprv' ORDER BY Name"; //where admin approve	
	$blob= $pdo->query($sql);
	foreach ($result=$blob->fetchAll(PDO::FETCH_COLUMN) as $row) {
	
	}
	return $result;
}
?>
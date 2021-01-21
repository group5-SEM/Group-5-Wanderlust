<?php
function setConnectionInfo($values=array()){
	$connString=$values[0];
	$user=$values[1];
	$password=$values[2];
	$pdo=new PDO($connString, $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
}

function listArticles(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT ArticleTitle, Id FROM article ORDER BY Id DESC';
	$statement=$pdo->query($sql);
	return $statement;
}

function displaySelectedArticle($articleID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="SELECT * FROM article WHERE Id = '$articleID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function deletearticle($articleID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="DELETE FROM article WHERE Id = '$articleID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function listPackages(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT Name, Id, RequestStatus, Travelagentid FROM package WHERE RequestStatus = "inreq"';
	$statement=$pdo->query($sql);
	return $statement;
}

function displaySelectedPackage($ID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="SELECT Id, Name, Location, Price, PackageDescription, RequestStatus, Travelagentid FROM package WHERE Id = '$ID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function selectedPackageImg($ID,$imgID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql = "SELECT Image".$imgID." FROM package WHERE Id=" . $ID;
	$statement=$pdo->query($sql);
	$image = $statement->fetchAll(PDO::FETCH_COLUMN);
	return $image;
}

function deletepackage($ID){							
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="DELETE FROM package WHERE Id =".$ID;
	$statement=$pdo->query($sql);
	return $statement;
}

function approve($ID){									
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="UPDATE package SET RequestStatus = 'apprv' WHERE Id ='$ID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function listActivities(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT ActivityName, ActivityId FROM activity ORDER BY ActivityId DESC';
	$statement=$pdo->query($sql);
	return $statement;
}

function displaySelectedActivity($activityID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="SELECT * FROM activity WHERE ActivityId = '$activityID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function ActivityImage($ID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql = "SELECT ActivityImage FROM activity WHERE ActivityId=" . $ID;
	$statement=$pdo->query($sql);
	$image = $statement->fetchAll(PDO::FETCH_COLUMN);
	return $image;
}

function deleteactivity($activityID){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql="DELETE FROM activity WHERE ActivityId = '$activityID'";
	$statement=$pdo->query($sql);
	return $statement;
}

function countRequest(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT COUNT(*) FROM package WHERE RequestStatus="inreq"';
	$statement=$pdo->query($sql);
	$rowcount = $statement->fetchColumn();
	return $rowcount;
}

function TotalArticles(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT COUNT(*) FROM article';
	$statement=$pdo->query($sql);
	$rowcount = $statement->fetchColumn();
	return $rowcount;
}

function TotalTravelAgent(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT COUNT(*) FROM travelagent';
	$statement=$pdo->query($sql);
	$rowcount = $statement->fetchColumn();
	return $rowcount;
}

function TotalCustomer(){
	$pdo=setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));
	$sql='SELECT COUNT(*) FROM customer';
	$statement=$pdo->query($sql);
	$rowcount = $statement->fetchColumn();
	return $rowcount;
}

?>
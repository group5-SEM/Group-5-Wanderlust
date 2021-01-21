<?php
define('DBCONNECTION','mysql:host=localhost;dbname=group04_db');
define('DBUSER','root');
define ('DBPASS','');

//connecting to the database
function setConnectionInfo($value=array()){
	$connString=$value[0];
	$user=$value[1];
	$password=$value[2];
	try{
		$pdo= new PDO($connString,$user,$password); // the part that actually connect to the database
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}

try{
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["email"]) && isset($_POST["pwd"])){

			if($_POST["user"] == "customer"){
				$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
				$sql= "INSERT INTO customer (Name,Email,ContactNumber,Password) VALUES ('','$_POST[email]','','$_POST[pwd]')";
				$pdo->exec($sql); //use exec() because no result are returned
				header( "Location: login.php?email=".$_POST["email"] );
			}
			else if($_POST["user"]=="travelAgent"){
				$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
				$sql= "INSERT INTO travelagent (Email,Password) VALUES ('$_POST[email]','$_POST[pwd]')";
				$pdo->exec($sql); //use exec() because no result are returned
				header( "Location: travelagentForm.php?email=".$_POST["email"] );
			}
			$message=NULL;
			$changeColor=NULL;
		}		
	}
	else{
		$message=NULL;
		$changeColor=NULL;
	}
}
catch(PDOException $e){
	$message = "An account has been made with this email address.<br>Please enter a different email address.";
	$changeColor = '.required{background-color: #F3A290;';		
}
?>
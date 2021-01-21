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
		if(isset($_POST["name"]) && isset($_POST["agency"]) && isset($_POST["tel"]) && isset($_POST["address"])){
			if(isset($_FILES["img"])){
				echo 'true <br>';
				$name=$_FILES['img']['name'];
				$type=$_FILES['img']['type'];
				$data = file_get_contents($_FILES['img']['tmp_name']);
				
			}
			$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
			$sql ="UPDATE travelagent SET Name= '$_POST[name]',Agency ='$_POST[agency]',ContactNum = '$_POST[tel]', Address= '$_POST[address]', ProfilePic = ? WHERE Email='$_POST[email]'";
			$statement = $pdo->prepare($sql);
			$statement->bindParam(1,$data);
			$statement->execute();
			header( "Location: login.php");
		}
	}

}
catch(PDOException $e){
	$message = "An account has been made with this email address.<br>Please enter a different email address.";	
}










?>


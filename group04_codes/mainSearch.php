<?php
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

try{
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["search"])){
			$search = $_POST["search"];
			header("Location: package-list.php?search=".$_POST["search"]);
		}		
	}

}
catch(PDOException $e){
	$message = "An account has been made with this email address.<br>Please enter a different email address.";	
}
?>
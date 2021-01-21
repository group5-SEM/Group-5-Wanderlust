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

try{
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["email"]) && isset($_POST["pwd"])){
			$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));
			$sql="SELECT Email FROM customer WHERE Email='$_POST[email]' AND Password='$_POST[pwd]'";
			$result = $pdo->query($sql);
			$count = $result->rowCount();
			if($count==1){
				//echo "This is a customer";
				//move to the homepage
				header( "Location: main.php?email=".$_POST["email"] );
			}
			else if ($count == 0){
				//admin default login
				if(($_POST["email"] == "admin@abc.com") && ($_POST["pwd"] == "admin")){
					//echo "This is an admin";
					header("Location:AdminPage.php");

				}
				else{
					$sql="SELECT Email FROM travelagent WHERE Email='$_POST[email]' AND Password='$_POST[pwd]'";
					$result = $pdo->query($sql);
					$count = $result->rowCount();
					if($count == 1){
						//echo $count;
						echo "This is a travel agent";
						header( "Location: travelagent4.php?email=".$_POST["email"] );
					}
				}	
			}
			$message=NULL;
			$goToSignup=NULL;
		}
	}
	else{
		$message=NULL;
		$goToSignup=NULL;
	}
}
catch(PDOException $e){
	echo "Something wrong ;))" . $e->getMessage();
}

?>
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

$pdo=setConnectionInfo(array(DBCONNECTION,DBUSER,DBPASS));

$email = $_POST['email'];

$sql = "SELECT TravelAgentId FROM travelagent WHERE Email = '$_POST[email]'";
$id = $pdo->query($sql)->fetch();
$id = $id[0];


if(isset($_FILES['pkgimg']) && isset($_FILES['img1']) && isset($_FILES['img2']) && isset($_FILES['img3']) && isset($_FILES['img4']) && isset($_FILES['img5'])){
	$data=file_get_contents($_FILES['pkgimg']['tmp_name']);
	$data1=file_get_contents($_FILES['img1']['tmp_name']);
	$data2=file_get_contents($_FILES['img2']['tmp_name']);
	$data3=file_get_contents($_FILES['img3']['tmp_name']);
	$data4=file_get_contents($_FILES['img4']['tmp_name']);
	$data5=file_get_contents($_FILES['img5']['tmp_name']);
	
	$sql = "INSERT INTO package (Id, Name, Location, Price, PackageDescription, PackageImage, Image1, Image2, Image3, Image4, Image5, RequestStatus, TravelAgentId) VALUES (NULL, '$_POST[name]', '$_POST[location]', '$_POST[price]', '$_POST[desc]', ?, ?, ?, ?, ?, ?, 'inreq', $id)";
	
	$statement=$pdo->prepare($sql);
	$statement->bindParam(1,$data);
	$statement->bindParam(2,$data1);
	$statement->bindParam(3,$data2);
	$statement->bindParam(4,$data3);
	$statement->bindParam(5,$data4);
	$statement->bindParam(6,$data5);
	
	if($statement->execute()) {
		header('Location:travelagent4.php?email='.$email);
	}
}
else {
	echo "Image not set";
}
?>
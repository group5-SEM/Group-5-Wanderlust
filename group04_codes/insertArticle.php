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
$sql = "INSERT INTO article (Id, ArticleTitle, ArticleDescription, ArticleLink) VALUES (NULL, '$_POST[title]', '$_POST[desc]', '$_POST[link]')";
$pdo->prepare($sql)->execute([NULL, '$_POST[title]', '$_POST[desc]', '$_POST[link]']);

header("Location:A-manage.php");
?>
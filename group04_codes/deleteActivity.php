<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group04_db";


try {

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('DELETE FROM customeractivity WHERE CustomerActivityId = :id');
    $delete = filter_input(INPUT_GET, 'delete_id', FILTER_SANITIZE_NUMBER_INT); 
    $statement->bindParam(':id', $delete, PDO::PARAM_INT);
    $statement->execute(); 
	
	echo "<script>alert('Successfully Deleted!') </script>"; 
	header("Location: timeline.php?email=".$_GET['email']);


} catch (PDOException $e) {

    print "Error!: " . $e->getMessage() . "<br/>";
    die();

}

?>

<?php

//isset
if (isset($_POST['update'])) {
//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');


$ActivityName = $_POST['name'];
$ActivityDescription=$_POST['description'];
$ActivityPrice=$_POST['price'];
$id = $_POST['id'];

if(is_uploaded_file($_FILES['image']['tmp_name'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "UPDATE activity set ActivityName='".$ActivityName."', ActivityDescription='".$ActivityDescription."', ActivityPrice='".$ActivityPrice."', ActivityImage='".$image."' WHERE ActivityId=$id";
} 
else{
	//update query
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$sql = "UPDATE activity set ActivityName='".$ActivityName."', ActivityDescription='".$ActivityDescription."', ActivityPrice='".$ActivityPrice."' WHERE ActivityId=$id ";
}

//execute the query
if(mysqli_query($con, $sql))
	header("refresh:1;url='C-activities.php'");
else
	echo"Not updated";

}

?>
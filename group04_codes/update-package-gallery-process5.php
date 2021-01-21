<?php

if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['image5']['tmp_name'])) {
        //connect to mysql
		$con = mysqli_connect('localhost','root','');

		//select db
		mysqli_select_db($con, 'group04_db');
		
        $Image5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));
        
		//update query
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		$email = $_POST['email'];

		$sql = "Update package set Image5='".$Image5."' where Id='".$id."' ";

		//execute the query
		if(mysqli_query($con, $sql))
			header('Location:travelagent4.php?email='.$email);
		else
			echo"Not updated";
	}
}

?>
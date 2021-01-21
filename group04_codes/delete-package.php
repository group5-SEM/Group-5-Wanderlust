<?php
//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');

?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="travelagent.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   
	
</head>
<body>
		<?php
			
			if(isset($_GET['delete_id']))
			{
				$delete_id = $_GET['delete_id'];
				$emailta = $_GET['emailta'];
				$sql="DELETE FROM package WHERE Id=".$delete_id;
				if(mysqli_query($con, $sql))
					header('Location:travelagent4.php?email='.$emailta);
				
			}
		?>
		
</body>
</html>
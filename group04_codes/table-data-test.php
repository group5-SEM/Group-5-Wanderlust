<?php

//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'wanderlust');

//select query
$sql = "SELECT * from package";

//execute the query
$records = mysqli_query($con, $sql)

?>

<!DOCTYPE html>
<html>
<head lang="en">
   
</head>

<body>
	<table>
		<tr>
			<th> Package Name </th>
			<th> Package Location </th>
			<th> Package Description </th>
		</tr>
		<?php
		while($row = mysqli_fetch_array($records)) { ?>
			<tr><form action="update-package-form.php" method="post">
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			<td><input type="hidden"  value="<?php echo $row['PackageDescription']?> "/> </td>
			<td><input type="text" name="idpack" value="<?php echo $row['Id']?> "/> </td>
			
			<td><a href="update-package-form.php?id=<?php echo $row['Id']; ?>"><button type="submit" name="update-button">Update</button></a></td>
			</form></tr>
		<?php
			
		}
		?>
	</table>
</body>

<footer>

</footer>
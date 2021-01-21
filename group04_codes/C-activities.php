<?php
	include 'includes/wanderlust-connect.php';
	include 'includes/wanderlust-db.php';
	$activity = listActivities();
?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Wanderlust: Admin</title>
   <style>
		<?php include 'style.css';?>
   </style>
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	  <div class="row">
		<div class="col-sm">
			<h1>Activities Manager</h1>
		</div>
	  </div>
	  <div class="row">
		<div class="col-sm articlelist">
			<p><br>List of activities available. Click <a href='addNewActivity.php'>here</a> to post new activities.<br><br>
				<ul>
					<?php
						foreach($activity as $row){ //put in identifier for every link
							echo '<li><a href = Ca-activitiesdetails.php?id='.$row['ActivityId'].'>'.$row['ActivityName'].'</li><br>';
						}
					?>
				</ul>
			</p>
		</div>		
	  </div>
	</div>
	<br>
	
	<?php
		$back = "AdminPage.php";
		include 'footerAdmin.php';
	?>
</body>
</html>
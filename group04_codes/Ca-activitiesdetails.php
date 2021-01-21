<?php
	include 'includes/wanderlust-connect.php';
	include 'includes/wanderlust-db.php';
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
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm articlelist">
				<?php
					$id=$_GET['id']; //collect the ID from URL
					$activities = displaySelectedActivity($id);
					$img = ActivityImage($id);
					
					foreach ($activities as $details){
						echo "<h1>".$details['ActivityName']."</h1><br>";
						echo "<p>Activity Price: RM".$details['ActivityPrice']."</p><br>";
						echo "<p>Activity Description: <br>".$details['ActivityDescription']."</p><br>";
						echo "<p>Images: <br>";
						foreach ($img as $pix){
							if (empty($pix)){
								echo '<p><i>No image to show...</i></p>';
							}
							else{
								echo '<span class=displayimgs>';
								echo '<img alt="activity image" src="data:image/jpeg;base64,'.base64_encode($pix).'"/>';
								echo '</span>';
							}
						}
					}
				?>	
			</div>
		</div>
	</div>
	<br>
	<p align="center">
		<button class="deletebutton" onclick="confirmbox()">Delete</button>
		<button class="approvebtn" onclick="update()">Update</button>
	</p>
	<script>
		function confirmbox(){
			if (confirm("Are you sure you want to delete this activity?")==true){
				window.location.href = "Cb-delete.php?id="+<?php echo $id;?>;
			}			
		}
		function update(){
			window.location.href = "update-activity-form.php?id="+<?php echo $id;?>;
		}
	</script>
</body>
<?php
	$back = "C-activities.php";
	include 'footerAdmin.php';
?>
</html>
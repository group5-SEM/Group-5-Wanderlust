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
					$packages = displaySelectedPackage($id);
					
					foreach ($packages as $details){
						echo "<h1>".$details['Name']."</h1><br>";
						echo "<p> Location: ".$details['Location']."</p><br>";
						echo "<p> Package Price: RM".$details['Price']."</p><br>";
						echo "<p> Package Description: ".$details['PackageDescription']."</p><br>";
						echo "<p> Images: </p><br>";
						for ($i=1; $i<6; $i++){
						$image = selectedPackageImg($id,$i);
						foreach ($image as $img){
							if (empty($img)){
								echo ' ';
							}
							else{
								echo '<span class=displayimgs>';
								echo '<img alt="img '.$i.'" src="data:image/jpeg;base64,'.base64_encode($img).'"/>';
								echo '</span>';
								}
							}
						}
						echo "<p> Travel Agent ID: ".$details['Travelagentid']."</p><br>";
					}
					
				?>	
			</div>
		</div>
	</div>
	<br>
	<p align="center">
		<button class="deletebutton" onclick="confirmbox()">Decline</button>
		<button class="approvebtn" onclick="approve()">Approve</button>	
	</p>
	<script>
		function approve(){
			window.location.href="Bb-updatestatus.php?id="+<?php echo $id;?>;
		}
		function confirmbox(){
			if (confirm(confirm("Are you sure you want to decline the request for this package?")==true)){
				window.location.href="Bc-delete.php?id="+<?php echo $id;?>;
			}
		}
	</script>
	<?php
		$back = "B-packagereq.php";
		include 'footerAdmin.php';
	?>
</body>
</html>
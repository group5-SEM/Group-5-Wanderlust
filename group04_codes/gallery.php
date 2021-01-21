<?php

//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');

$id = $_GET['id'];
$email = $_GET['email'];

//select query
//$sql = "SELECT * from package where Id=$id";
$sql = "SELECT package.Id, package.Name, package.Location, package.PackageDescription, package.Price, package.Image1, package.Image2, package.Image3, package.Image4, package.Image5, travelagent.Email from package, travelagent where package.Id='".$id."' AND travelagent.Email='".$email."'";


//execute the query
$records = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Gallery</title>
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="gallery.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
	
</head>
<body>
<header>
		<nav>
			  <p>Wanderlust<span>Travel</span></p>
			  <a href="login.php" id="right-nav">Logout</a>
		</nav>
</header>

	
	<?php
		while($row = mysqli_fetch_array($records)) { ?>
		
		<div class="wrapper">
			<div class="picture">
				<div class="text-box">
					<a href="update_package_gallery.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Image1</a>
				</div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image1'] ).'"/>'; ?>
			</div>
			
			<div class="picture">
				<div class="text-box">
					<a href="update_package_gallery2.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Image2</a>
				</div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image2'] ).'"/>'; ?>
			</div>
			
		   <div class="picture">
				<div class="text-box">
					<a href="update_package_gallery3.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Image3</a>
				</div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image3'] ).'"/>'; ?>
			</div>
		</div>
		<div class="wrapper">
			<div class="picture">
				<div class="text-box">
					<a href="update_package_gallery4.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Image4</a>
				</div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image4'] ).'"/>'; ?>
			</div>
			
			<div class="picture">
				<div class="text-box">
					<a href="update_package_gallery5.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Image5</a>
				</div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image5'] ).'"/>'; ?>
			</div>
		</div>
				
	<?php } ?>
			

<footer class="footer-distributed">

		<div class="footer-box">

			<h3>Wanderlust<span>Travel</span></h3>

			<p class="footer-links">
				<a href="#">Home | </a>
					
				<a href="#">Package List | </a>
					
				<a href="#">Contact</a>
			</p>

			<p class="footer-wanderlust">wanderlust &copy; 2019</p>
		</div>

		<div class="footer-box">

			
			<p id="address">Multimedia University<br/>
			Persiaran Multimedia<br/>
			63100, Cyberjaya<br/>
			Selangor<br/>
			Malaysia</p>
				
			<p id="contact-num">+60123459876</p>
			

			<div>
				<p><a href="mailto:contact@wanderlust.com">contact@wanderlust.com</a></p>
			</div>

		</div>

		<div class="footer-box">

			<p class="footer-company-about">
				<span>About the company</span>
					Wanderlust is a web app for travelling and tourism for travel agent to promote their tours packages or for travellers to plan their travelling journey.
			</p>

			<div class="footer-icons">
				<a href="#"><img src="social/facebook_32.png" alt="facebook"></a>
				<a href="#"><img src="social/twitter_32.png" alt="twitter"></a>
				<a href="#"><img src="social/instagram.png" alt="instagram"></a>
			</div>

		</div>
</footer>
</body>
</html>
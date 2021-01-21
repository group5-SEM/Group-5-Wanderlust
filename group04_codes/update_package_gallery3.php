<?php

//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');

$email = $_GET['email'];
$id=$_GET['id'];

$sql = "SELECT package.Image3, travelagent.Email from package, travelagent where package.Id='".$id."' AND travelagent.Email='".$email."'";

//execute the query
$result = mysqli_query($con, $sql) or die( mysqli_error($con));

//execute the query
$result = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Update Package Gallery</title>
   <link rel="stylesheet" href="nav-and-footer.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>

<body>
	<header>
		<nav>
			<p>Wanderlust<span>Travel</span></p>
			<a href="login.php" id="right-nav">Logout</a>
		</nav>
	</header>
	
	
	<div class="col-md-10 offset-md-1" id="update-window">
		<span class="anchor"></span>
		<hr class="my-2">

		
		<div class="card card-outline-secondary">
		
			<div class="card-header">
				<h3 class="mb-0">Update Package Gallery - Image3</h3>
			</div>
			
			
			<div class="card-body">
			
				<form method="post" action="update-package-gallery-process3.php" enctype='multipart/form-data' name="uform" id="update-form" class="form" role="form" >
					<fieldset>
						<div class="form-row">
							<div class="col">
								<div class="form-group">
									<label for="name">Image3:</label>
									<input type="file" name="image3" class="form-control" id="packageName" required />
									
								</div>
							</div>
								
							<input type="hidden" name="id" value="<?php echo $id?> "/>
							<input type="hidden" name="email" value="<?php echo $email?> "/>
							<button type="submit" name="update" class="btn btn-secondary btn-lg float-right">Update Image3</button>
						</div>
					</fieldset>
				</form>
				
			
		</div>
		
		<hr class="my-2">
		
	</div>
	</div>
	
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

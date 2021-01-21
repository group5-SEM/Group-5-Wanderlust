<?php

//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');

$packageid=$_GET['id'];
$email = $_GET['email'];

$sql = "SELECT package.Id, package.Name, package.Location, package.PackageDescription, package.Price, package.Image1, package.Image2, package.Image3, package.Image4, package.Image5, travelagent.Email from package, travelagent where package.Id='".$packageid."' AND travelagent.Email='".$email."'";

//execute the query
$result = mysqli_query($con, $sql) or die( mysqli_error($con));;



?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Update Package</title>
   <link rel="stylesheet" href="nav-and-footer.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	<script src="update-package-form.js"></script>
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
				<h3 class="mb-0">Update Package</h3>
			</div>
			
			
			<div class="card-body">
			<?php while($row=mysqli_fetch_array($result)) {?>
				<form method="post" action="update-package-process.php" enctype='multipart/form-data' name="uform" id="update-form" class="form" role="form" >
					<fieldset>
						<label for="name" class="mb-0">Package Name</label>
						<div class="row mb-1">
							<div class="col-lg-12">
								<input type="text" name="name" id="packageName" class="form-control required-input" value="<?php echo $row['Name']?>">
							</div>
						</div>
							
						<label for="location" class="mb-0">Location</label>
						<div class="row mb-1">
							<div class="col-lg-12">
								<input type="text" name="location" id="location" class="form-control required-input" value="<?php echo $row['Location']?>">
							</div>
						</div>
							
							<label for="price" class="mb-0">Price</label>
							<div class="row mb-1">
								<div class="col-lg-12">
									<input type="text" name="price" id="price" class="form-control required-input" value="<?php echo $row['Price']?>">
								</div>
							</div>
							
							<label for="description" class="mb-0">Package Description</label>
							<div class="row mb-1">
								<div class="col-lg-12">
									<textarea rows="6" name="description" id="description" class="form-control"><?php echo $row['PackageDescription']; ?></textarea>
								</div>
							</div>
							
							<input type="hidden" name="id" value="<?php echo $row['Id']?> ">
							<input type="hidden" name="email" value="<?php echo $row['Email']?> ">
							
						
						<button type="submit" name="update" class="btn btn-secondary btn-lg float-right">Update</button>
					</fieldset>
				</form>
				<?php 
			}
			
			?>
			</div>
			
		</div>
		
		<hr class="my-2">
		
	</div>
	<!--/col-->
	
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

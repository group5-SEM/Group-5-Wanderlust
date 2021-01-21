

<?php 
$email = $_GET['email']; 
include 'includes/database.inc.php';
include 'includes/connection.php';
?>





<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Plan By Yourself</title>
   <link rel="stylesheet" href="plan.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		<?php include 'plan.css'; ?>
   </style>
</head>

<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light" id="space1">
		<div class="container-fluid">
			<a class="navbar-brand" href="main.php<?php echo '?email='.$email; ?>"><img src="images/logo.png" 
			alt="logo" id="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>	
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="main.php<?php echo '?email='.$email; ?>"> Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php"> Logout </a>
					</li>
				</ul>
			</div>
	</nav>
		
	<!-- images slider -->
	<div class="container-fluid paddding" id="space2">
		<div class="row padding">
			<div class="col-md-12">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- indicator for which images on the slide -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>
					<!-- the images -->
					<div class="carousel-inner">
						<div class="carousel-item active" id="button1">
							<img src="images/slider1.jpg" alt="image 1">
							<div class="carousel-caption">
								<h1 class="display-2">WANDERLUST</h1>
								<h3> Travel | Explore | Discover </h3>
								<a href="#start" class="btn btn-outline-secondary">Start Planning </a>
								
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/slider2.jpg" alt="image 2">
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid paddding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-2" id="start">Plan Your Trip Now!</h1>
			</div>
			<div class="col-12">
				<p class="lead">Plan activities during your travel, book a flight and find the best hotel in 
				town with Wanderlust!</p>
			</div>
		</div>
	</div>
	
	
	<!-- user choice -->
	<div class="container-fluid paddding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/activity.jpg" alt="activity planning">
					<div class="card-body">
						<div class="bold"><h3 class="card-title">Activities</h3></div>
						<p class="card-text">Plan activities for your trip and enjoy them to the fullest!  </p>
						<a href="activities.php<?php echo '?email='.$email; ?>" class="btn btn-outline-secondary">Plan Now </a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="images/flight.jpg" alt="flight booking">
					<div class="card-body">
						<div class="bold"><h3 class="card-title">Flights</h3></div>
						<p class="card-text">Book your flight now with our travelling partner, Air Asia! </p>
						<a href="https://www.airasia.com/en/gb" target="_blank" class="btn btn-outline-secondary">Book Now </a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<p class="articleImg">
					<img class="card-img-top" src="images/hotel.jpg" alt="hotel booking">
					</p>
					<div class="card-body">
						<div class="bold"><h3 class="card-title">Hotels</h3></div>
						<p class="card-text">Choose the best hotel in town for your accommodation! </p>
						<a href="https://www.trivago.com.my/" target="_blank" class="btn btn-outline-secondary">Book Now </a>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	
	
	<!-- Articles Header -->
	<div class= "line"></div>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-3">
				<h3>Articles For You</h3>
			</div>
		</div>
	</div>
	
	<!-- The Articles -->
	<div class="container-fluid padding">
		<div class="row padding" id="article">
			<?php 
			$displayarticle = randomArticle();
			$picnum = 8;
			foreach ($displayarticle as $x){
			?>
				<div class="col-md-3">
					<div class="card">
						<p class="articleImg">
						<img class="card-img-top" src="images/article1.png" alt="Article" class="img-fluid">
						</p>
					</div>
				</div>
				<div class="col-md-3">
					<p> <br/> <br/>
					<?php echo $x['ArticleTitle'];?></p> 
					<a href="<?php echo $x['ArticleLink'];?>" target="_blank" class="articles"> Read More </a>
				</div>
			<?php
			$picnum=$picnum+5;
			}
			?>
		</div>
	</div>
	
	<!-- footer -->
	<footer>
	<div class="container-fluid padding">
		<div class="row text-left">
			<div class="col-md-4">
				<h3 class="display-4">Wanderlust<span>Travel</span></h3>
				<p class="footer-links">
					<a href="#">Home | </a>   
					<a href="#">Package List | </a>                  
					<a href="#">Contact</a>
				</p>
				<p class="footer-wanderlust">wanderlust &copy; 2019</p>
			</div>
			<div class="col-md-4">
				<p id="address">Multimedia University<br/>
				Persiaran Multimedia <br/>
				63100, Cyberjaya<br/>
				Selangor<br/>
				Malaysia</p>               
				<p id="contact-num">+60123459876</p>
				<p><a href="mailto:contact@wanderlust.com">contact@wanderlust.com</a></p>
			</div>
			<div class="col-md-4">
				<p class="footer-company-about">
					<span>About the company</span> <br/> <br/>
                    Wanderlust is a web app for travelling and tourism for travel agent to
					promote their tours packages or for travellers to plan their travelling journey.
				</p>
				<div class="footer-icons">
					<p class="footer-company-about">Visit our social media:</p>
					<a href="#"><img src="images/facebook.png" alt="facebook"></a>
					<a href="#"><img src="images/twitter.png" alt="twitter"></a>
					<a href="#"><img src="images/instagram.png" alt="instagram"></a>
				</div>
			</div>
		</div>
	</div>
	</footer>
</body>































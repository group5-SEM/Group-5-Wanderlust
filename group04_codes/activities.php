<?php

include 'includes/database.inc.php';
include 'includes/connection.php';

$activities=readActivities();
?>




<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>PActivities Planning</title>
   <link rel="stylesheet" href="plan.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="checkDate.js"></script>
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
	
	<!-- Whats interesting -->
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-12">
				<h1 class="display-4" id="plan">What's interesting in Langkawi, Malaysia</h1>
				<h3>Experience all these attractions in your travel! </h3>
				<h5>Customize what you want by clicking on the activities and add to 
				your timeline with your preferred date.</h5>
			</div>
		</div>
	</div>
	
	<!-- Choose Activities -->
	
	<div class="container-fluid paddding">
		<div class="row padding">
		<?php
		foreach($activities as $act){
		?>
		
			<div class="col-md-3">
				<div class="card">	
					<p class="articleImg">
					<?php
						echo '<img class="images" alt="activityImage" width="349" height="200"
						src="data:image/jpeg;base64,'.base64_encode( $act[4] ).'"/><br>';
					
					?>
					</p>
					<form method="post" action="insertCustomerActivity.php" id="addActivityForm">
					<fieldset>
					<div class="card-body">
						<h4 class="card-title"><?php echo $act[1];?></h4>
						<p class="card-text"><?php echo $act[2];?></p>
						<p class="card-price"><?php echo'RM'.number_format($act[3], 2);?></p>
						<label value="">Choose a date</label>
						<input type="date" name="date" class="datefield" required />
						<label value="">Choose a time</label>
						<input type="time" name="time" class="timefield" required />
						<input type="hidden" name="email" value="<?php echo $_GET['email']?>" />
						<input type="hidden" name="actId" value="<?php echo $act[0];?>" />
						<button type="submit" id="button3" onclick="checkDate(event)">Add To My Timeline</button>
					</div>
					</fieldset>
					</form>
				</div>
			</div>
		
		<?php
		}
		?>
		</div>
	</div>
	
	<div class="container-fluid paddding">
		<div class="row padding" id="button2">
			<div class="col-md-12">
				<?php $email = $_GET['email']; ?>
				<a href="timeline.php<?php echo '?email='.$email; ?>"
				class="btn btn-outline-secondary">Go To My Timeline Page </a>
			</div>
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
</html>
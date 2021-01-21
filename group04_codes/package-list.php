<?php
include 'packageListData.php';

if($_GET){
	$search = $_GET['search'];
}

if(isset($search)){
	$packageImage = searchPackageImage($search);
	foreach($packageImage as $image){
		$pic='<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
	}
	$packageName = searchPackageName($search);
	foreach($packageName as $name){
	}
}
else{
	$packageImage=viewPackageImage();
	foreach($packageImage as $image){
		$pic='<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
	}

	$packageName=viewPackageName();
	foreach($packageName as $name){
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Package List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="package-list.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<header>
		
		<nav>
		  <a href="main.php">Home</a>
		  <a href="login.php" id="right-nav">Logout</a>
		</nav>
	</header>
	
	<h1> Package List </h1>
	<div class="container">
		<div class="row">
			<?php
			
			foreach(array_combine($packageName,$packageImage) as $name=>$image){
				echo '<div class="col-sm-4">';
				echo '<div class="polaroid">';
				echo '<a href="package-description.php?packageName='.$name.'"><img src="data:image/jpeg;base64,'.base64_encode( $image ).'" alt="'.$name.'" style="width:100%"></a>';
				echo '<div class="picture-box">';
				echo '<p>'.$name.'</p>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			?>
		</div>
	</div>
<footer class="footer-distributed">

		<div class="footer-box">

			<h3>Wanderlust<span>Travel</span></h3>

			<p class="footer-links">
				<a href="#">Home | </a>
					
				<a href="package-list.html">Package List | </a>
					
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
				<a href="#"><img src="social/facebook_32.png"></a>
				<a href="#"><img src="social/twitter_32.png"></a>
				<a href="#"><img src="social/instagram.png"></i></a>
			</div>

		</div>

	</footer>
</body>
</html>
<?php
include 'packageListData.php';

if($_GET){
	$packageName = $_GET['packageName'];   
}else{
  echo "Url has no user";
}

$theImage=viewSelectedPackage($packageName);
foreach($theImage as $image){
	$pic='<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
}

$selectedInfo=viewSelectedInfo($packageName);
foreach($selectedInfo as $info){
}

$image1 = viewImage1($packageName);
$image2 = viewImage2($packageName);
$image3 = viewImage3($packageName);
$image4 = viewImage4($packageName);
$image5 = viewImage5($packageName);

$gallery=array();
$gallery = array($image1,$image2,$image3,$image4,$image5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Package Description</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="package-description.css" />
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<nav>
		  <a href="main.php">Home</a>
		  <a href="package-list.php">Package List</a>
		  <a href="login.php" id="right-nav">Logout</a>
		</nav>
	</header>
	
	<h1> Package Description </h1>
	
	<div class="row">
		<figure>
			<?php echo $pic;?>		
			<figcaption id="fig-size"><?php echo $info[1]?></figcaption>
		</figure>
		<p id="travel-agent"> Travel Agent :<?php echo '<a href="travelagentprofile.php? name='.$info[0].'">'?><?php echo $info[0]?></a> </p>
	</div>
	
	<div class="column">
		<div class="row" id="itinerary">
			<h2>WHAT TO EXPECT FROM THIS TRIP</h2>
			<div class="day-activity-box">
				<span class="day">ATTRACTION</span>
				<div class="timeline-box">	
					<p><?php echo $info[3];?></p>
				</div>
			</div>
		</div>
		
		<h2>Gallery </h2>	
		<div class="wrapper">
			<?php
			for($i=0; $i<3;$i++)
			{
				echo '<div class="picture">';
				echo $gallery[$i];
				echo '</div>';
			}
			?>
		</div>
		<div class="wrapper">
			<?php
			for($i=3; $i<5;$i++)
			{
				echo '<div class="picture">';
				echo $gallery[$i];
				echo '</div>';
			}
			?>
		</div>
	</div>
	
	<div class="row">
	
		<div class="column" id="price">
			<h2>PRICE DETAILS</h2>
			<div class="price-details">
				<p> Price: RM<?php echo $info[2]?> </p>
			</div>
		</div>
		
		<div class="column">
			<div class="form-format">
				<form method="post" action="http://www.randyconnolly.com/tests/process.php">
						
					<fieldset>
						
						<p id="book-form">BOOKING FORM</p>
							
							<p> <label>Name </label> </p>
							<p>
								<input type="text" name="name" />
							</p>
							
							<p> <label>Email</label> </p>
							<p>
								<input type="email" name="email" /> 
							</p>
							
							<p> <label>Contact number  </label> </p>
							<p>
								<input type="tel" name="contact number" />
							</p>
							
							<p> <label>Adult </label> </p>
							<p>
								<input type="number" min="0" max="30" name="adult" />
							</p>
							
							<p> <label>Children </label> </p>
							<p>
								<input type="number" min="0" max="30" name="children" />
							</p>
							
							<p> <label>Senior Citizen </label> </p>
							<p>
								<input type="number" min="0" max="30" name="senior citizen" />
							</p>
							
							<p> <label>Departure date</label> </p>
							<p>
								<input type="date" name="departure date" />
							</p>
							
							<p> 
								<input type="submit" value="Book"/>
							
								<input type="reset" value="Clear Form"/>
							</p>
							
						</fieldset>
						
					</form>
			</div>
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
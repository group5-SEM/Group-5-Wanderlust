<?php
include 'travelagentData.php';

if($_GET){
	$agentName = $_GET['name'];
}else{
  echo "Url has no user";
}

$getProfile=getProfile($agentName);
foreach($getProfile as $info){
}
//echo $info[0];
//echo $info[1];
//echo $info[2];
	
$packageName=getAgentPackageName($agentName);
foreach($packageName as $name){
	//echo $name."<br>";
}

$packageImage=getAgentPackageImage($agentName);
foreach($packageImage as $image){
	$pic='<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
	//echo $pic.'<br>';
}

$agentFace = getAgentImage($agentName);
foreach($agentFace as $image){
	$pic='<img class="profilepic" alt="profile picture" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Travel Agent Profile</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="travelagentprofile.css" />
   <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			  <a href="main.php">Home</a>
			  <a href="login.php" id="right-nav">Logout</a>
	</nav>
	</header>
	<table>
		<tr>
			<td class="welcome" colspan="3">
				<p><label>Hi, I am <?php echo $info[0]; ?></label></p><br>
				<p><?php echo $pic; ?></p>
				<p><img class="rate" alt="star" src="star.png"/><img class="rate" alt="star" src="star.png"/><img class="rate" alt="star" src="star.png"/><img class="rate" alt="star" src="star.png"/><img class="rate" alt="star" src="star.png"/></p>
			</td>
		</tr>
		<tr>
			<td>
				<fieldset class="sidebars" style="width: 200px;">
					<legend>Profile</legend>
					<p><label>Address: </label><?php echo $info[2];?></p>
					<br>
					<p><label>No. Tel: </label><?php echo $info[1];?></p>
				</fieldset>
			</td>
			<td>
				<fieldset class="package" style="width: 400px;">
					<legend>Package List</legend>
					<?php
					foreach(array_combine($packageName,$packageImage) as $name=>$image){
						echo '<a href="package-description.php?packageName='.$name.'"><img src="data:image/jpeg;base64,'.base64_encode( $image ).'" alt="'.$name.'" style="width:400px"></a>';
						echo '<a href="package-description.php?packageName='.$name.'"><p>Package: '.$name.'</p></a>';
					}
					?>
				</fieldset>
			</td>
			<td>
				<fieldset class="sidebars" style="width: 200px;">
					<legend>Reviews</legend>
					<p><img class="reviewpic" alt="reviewer profile picture" src="jeongyeon.png"/> <label>Jeongyeon Yoo</label></p>
					<p>My trip went so smoothly thanks to them! <3</p>
					<hr>
					<p><img class="reviewpic" alt="reviewer profile picture" src="tzuyu.png"/> <label>Tzuyu Chou</label></p>
					<p>Downright five stars! Don't fight me</p>

				</fieldset>
			</td>
		</tr>
	</table>
</body>
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
			<a href="#"><img src="social/facebook_32.png"></a>
			<a href="#"><img src="social/twitter_32.png"></a>
			<a href="#"><img src="social/instagram.png"></i></a>
		</div>

	</div>
</footer>
</html>
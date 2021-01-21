<?php
include 'mainSearch.php';

if(isset($_GET['email'])){
	$email = $_GET['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
   <meta charset="utf-8">
   <title>WanderLust</title>
   <link rel="stylesheet" href="reset.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <!--<link rel="stylesheet" href="main.css" /> -->
   <style>
   <?php
		include 'main.css';
	?>
   </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="main.php">Home</a></li>
			<li class="rightside"><a href="login.php">Logout</a></li>
		</ul>
	</nav>
	<div class="image">
		<img id="image1" src="images/logo.png" alt="Wanderlust">
	</div>
	<div>
		<h1 id="header">TRAVEL &#8739; EXPLORE &#8739; DISCOVER</h1>
		<form method="post">
			<input type="hidden" name="email" value="<?php echo $email;?>" />
			<input type="text" name="search" placeholder="Search" id="searchbox"><br>
			<input type="submit" name = "action" value="I want travel agent" id="submitbtn"/>
			<button type="submit" formaction="plan.php?email=<?php echo $email; ?>" id="submitbtn2">Let me plan myself</button>
		</form>
	</div>
</body>
</html>
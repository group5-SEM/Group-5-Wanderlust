<?php
include 'insertTravelAgentData.php';

if($_GET){
	$email = $_GET['email'];   
}else{
  echo "Url has no user";
}

?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
   <meta charset="utf-8">
   <title>Agent Form</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="travelagentForm.css" />
   <script src="travelagentForm.js"></script>
</head>
<body>
	<nav>
		<ul>
			<!--<li><a href="main.html">Home</a></li>-->
		</ul>
	</nav>
	<form method="post" action="" id="travelagentForm"  enctype="multipart/form-data">
		<h1>Agent Form</h1>
		<input type="hidden" name="email" value="<?php echo $email;?>" />
		<p class="requiredSection">
			<label>Name:</label><br>
			<input type="text" name="name" placeholder="Enter your name" id="inputsize1" class="required" /><br>
			
		</p>
		</p>
		<p class="requiredSection">
			<label>Agency:</label><br>
			<input type="text" name="agency" placeholder="Enter your agency" id="inputsize2" class="required"/>
		</p>
		<p class="requiredSection">
			<label>Contact Number:</label><br>
			<input type="tel" name="tel" placeholder="Enter you phone number" id="inputsize2" class="required"/>
		</p>
		<p class="requiredSection">
			<label>Address:</label><br>
			<input type="text" name="address" placeholder="Enter you address" id="inputsize2" class="required"/>
		</p>
		<p class="requiredSection">
			<label>Upload Profile Picture:</label><br>
			<input type="file" id="img" name="img" accept="image/*">
		</p>
		<p>
			<input type="hidden" id="requiredErrorMessage" value="Please fill in the blank space."/>
			<p id="showErrorMessage"></p>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>
		<p id="FormError">
		</p>
	</form>
</body>
</html>
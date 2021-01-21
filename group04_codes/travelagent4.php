<?php

//connect to mysql
$con = mysqli_connect('localhost','root','');

//select db
mysqli_select_db($con, 'group04_db');

//select query
$sql_id = "SELECT * from travelagent WHERE Email='".$_GET['email']."'";
$res_id = mysqli_query($con, $sql_id);

while($res_id2 = mysqli_fetch_array($res_id)) { 
	$travelagentid = $res_id2['TravelAgentId']; 
}


$sql = "SELECT package.Id, package.Name, package.Location, package.PackageDescription, package.Price, package.Image1, package.Image2, package.Image3, package.Image4, package.Image5, travelagent.Email from package, travelagent where package.TravelAgentId = travelagent.TravelAgentId AND travelagent.TravelAgentId = $travelagentid";

//execute the query
$records = mysqli_query($con, $sql);



//=======================================================//
if($_GET){
	$email = $_GET['email'];    
}else{
  echo "Url has no user";
}

include 'travelagentData.php';

$agentInfo = viewTravelAgentInfo($email);
foreach($agentInfo as $info){
}

$agentPic = viewAgentImage($email);
foreach($agentPic as $image){
	$pic='<img class="profilepic" alt="profile picture" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/><br>';
}
//=======================================================//

?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Travel Agent</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="travelagent.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   
	
</head>
<body>
<header>
	<nav>
		  <p>Wanderlust<span>Travel</span></p>
		  <a href="login.php" id="right-nav">Logout</a>
	</nav>
</header>
<table>
	<tr>
	<td class="row1" colspan="2">
		<label class="pagetitle">Travel Agent Page</label>
	</td>
	</tr>
	<tr>
		<td class="profile">
			<div class="ribbon">
				<img class="resizeimg" alt="ribbon" src="ribbon.png"/>
				<div class="centered">Profile</div>
			</div>
			<?php echo $pic; ?>
			<p><label><?php echo $info[0]; ?></label></p>
			<br>
			<p><label>Address: </label><p><?php echo $info[2]; ?></p>
			<br>
			<p><label>No. Tel: </label><?php echo $info[1]; ?></p>
			<br>
			<p class="editdelete"><a href="#">Edit</a></p>
		</td>
		<td class="packagelist">
			<p><label class="packagelisttitle">Package List</label></p>
			<br>
			
			<div class="content">
			<?php
				while($row = mysqli_fetch_array($records)) { ?>
				<section class="package" >
					<p><label class="packagetitle"><?php echo $row['Name']; ?></label>
					<p><?php echo $row['Location']; ?> <br>
					RM<?php echo $row['Price']; ?> <br></p>
					<p><input type="hidden" name="idpack" value="<?php echo $row['Id']?> "/></p>
					<p><input type="hidden" name="travelagentid" value="<?php echo $row['TravelAgentId']?> "/></p>
					<p><input type="hidden" name="email" value="<?php echo $row['Email']?> "/></p>
					<p class="editdelete">
						<a href="update-package-form.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email']; ?>">Update</a> | 
						<a href="gallery.php?id=<?php echo $row['Id']; ?>&email=<?php echo $row['Email'];?>">Update Gallery |</a>
						<a href="delete-package.php?delete_id=<?php echo $row['Id']?>&emailta=<?php echo $row['Email'];?>" onclick="return confirmbox()";>Delete</a>
					</p>
				</section>
				<hr>
				<?php } ?>
			
				<br>
				<p class="addpackage"><a href="addNewPackage.php?email=<?php echo $_GET['email'];?>">+ Add Package</a></p>
				
			</div>
			
		</td>
	</tr>
</table>

<script type="text/javascript">
		function confirmbox(){
			return confirm('Sure to Delete This Package?');
		}
		
	</script>
	
<footer class="footer-distributed">

		<div class="footer-box">

			<h3>Wanderlust<span>Travel</span></h3>

			<p class="footer-links">
				<a href="main.html">Home | </a>
					
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
				<a href="#"><img src="social/facebook_32.png" alt="facebook"></a>
				<a href="#"><img src="social/twitter_32.png" alt="twitter"></a>
				<a href="#"><img src="social/instagram.png" alt="instagram"></a>
			</div>

		</div>
</footer>
</body>
</html>
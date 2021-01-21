<?php
include 'includes/database.inc.php';
include 'includes/connection.php';

$email=$_GET['email'];
$customerId=readCustomerId($email);
foreach($customerId as $cust){
	$customerID = $cust[0];
}
$date = readDate($customerID);
$dateArray = array();
foreach($date as $d){
	array_push($dateArray, $d[0]);
}
$date1 = $dateArray[0];
$date2 = $dateArray[1];
$date3 = $dateArray[2];
$customerName=readCustomerName($customerID);
$customerActivity1=readCustomerActivity($customerID, $date1);
$customerActivity2=readCustomerActivity($customerID, $date2);
$customerActivity3=readCustomerActivity($customerID, $date3);
$date1 = date("d-m-Y", strtotime($dateArray[0]));
$date2 = date("d-m-Y", strtotime($dateArray[1]));
$date3 = date("d-m-Y", strtotime($dateArray[2]));
$totalPriceDate1=0;
$totalPriceDate2=0;
$totalPriceDate3=0;
$totalTripCost=0;



?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>My Timeline</title>
   <link rel="stylesheet" href="timeline.css" />
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function delete_id(id)
		{
			if(confirm('Are you sure to delete this activity?'))
			{
				window.location.href="deleteActivity.php?email=<?php echo $email; ?> & delete_id="+id;
			}
		}
	</script>
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
	
	<div class="section1">
		<table>
			<tr>
				<td>
					<img src="images/orang.png" width=50 height=50 alt="icon">	
				</td>
				<?php
				foreach($customerName as $cust)
				echo'<td>';
					echo'<h3>'.$cust[0].'</h3>';
				echo'</td>';
				?>
				
				
			</tr>
		</table>
	</div>
	
	<div class="container-fluid paddding">
	<div class="row text-center">
	<div class="col-12">
		<div class="section2">
			<h1 class="title"> Click On The Date You Wish To View </h1>
			<div class="Date">
			<table class="timeline">
				<tr>
					<td>
						<section id="section1">
						<input type="radio" name="sections" id="option1" checked>
						<label for="option1">
						<div class="circle">
						<?php echo'<p class="date">'.$date1.'</p>';?>
						</div>
						</label>
						<div class="activities">
							<?php echo'<h1><ul>'.$date1.'</ul></h1>';?>
							<table class="table table-bordered">
								<tr class="activity">
									<td class="time">
										Time
									</td>
									<td class="act">
										Activity
									</td>
									<td class="cost">
										Cost Estimation
									</td>
								</tr>
								<?php							
								foreach($customerActivity1 as $ca)
								{
								?>
									<tr class="activityy">
										<td id="time">
										<?php 
											$time=date("g:ia", strtotime($ca[0])); 
											echo $time;
										
										?></td>
										<td id="activity"><?php echo $ca[1]; ?></td>
										<td id="price">
										<?php 
										echo 'RM'.number_format($ca[2],2); 
										$totalPriceDate1 = $totalPriceDate1 + $ca[2];
										?></td>
										<td>
											<a href="javascript:delete_id(<?php echo $ca[4]; ?>)">
											<button class="button">Delete</button>
											</a>
										</td>
										
									</tr>
								<?php
								}
								?>
								<tr class="activityy">
									<td colspan="4" id="totalPrice">
										<?php echo 'Total Price = RM'.number_format($totalPriceDate1,2); ?>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<a href="activities.php<?php echo '?email='.$email; ?>">
										<button class="button">
										Add Another Activity </button></a>
									</td>
								</tr>
							</table>
						</div>
						</section>
					
					</td>
					<td>
						<div class="line">
						</div>
					</td>
					<td>
						<section id="section2">
						<input type="radio" name="sections" id="option2" checked>
						<label for="option2">
						<div class="circle">
						<?php echo'<p class="date">'.$date2.'</p>';?>
						</div>
						</label>
						<div class="activities">
							<?php echo'<h1> <ul>'.$date2.'</ul></h1>';?>
							<table class="table table-bordered">
								<tr class="activity">
									<td class="time">
										Time
									</td>
									<td class="act">
										Activity
									</td>
									<td class="cost">
										Cost Estimation
									</td>								
								</tr>
								<?php							
								foreach($customerActivity2 as $ca)
								{
									$id=$ca['CustomerActivityId'];
								?>
									<tr class="activityy">
										<td id="time">
										<?php 
											$time=date("g:ia", strtotime($ca[0])); 
											echo $time;
										
										?></td>
										<td id="activity"><?php echo $ca[1]; ?></td>
										<td id="price">
										<?php 
										echo 'RM'.number_format($ca[2],2); 
										$totalPriceDate2 = $totalPriceDate2 + $ca[2];
										?></td>
										<td>
											<a href="javascript:delete_id(<?php echo $ca[4]; ?>)">
											<button class="button">Delete</button>
											</a>
										</td>	
									</tr>
								<?php
								}
								?>
								<tr class="activityy">
									<td colspan="4" id="totalPrice">
										<?php echo 'Total Price = RM'.number_format($totalPriceDate2,2); ?>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<a href="activities.php<?php echo '?email='.$email; ?>">
										<button class="button">
										Add Another Activity </button></a>
									</td>
								</tr>
							</table>
						</div>
						</section>
						
					</td>
					<td>
						<div class="line">
						</div>
					</td>
					<td>
						<section id="section3">
						<input type="radio" name="sections" id="option3" checked>
						<label for="option3">
						<div class="circle">
						<?php echo'<p class="date">'.$date3.'</p>';?>
						</div>
						</label>
						<div class="activities">
							<?php echo'<h1><ul>'.$date3.'</ul></h1>';?>
							<table class="table table-bordered">
								<tr class="activity">
									<td class="time">
										Time
									</td>
									<td class="act">
										Activity
									</td>
									<td class="cost">
										Cost Estimation
									</td>
								</tr>
								<?php							
								foreach($customerActivity3 as $ca)
								{
									$id=$ca['CustomerActivityId'];
								?>
									<tr class="activityy">
										<td id="time">
										<?php 
											$time=date("g:ia", strtotime($ca[0])); 
											echo $time;
										
										?></td>
										<td id="activity"><?php echo $ca[1]; ?></td>
										<td id="price">
										<?php 
										echo 'RM'.number_format($ca[2],2); 
										$totalPriceDate3 = $totalPriceDate3 + $ca[2];
										?></td>
										<td>
											<a href="javascript:delete_id(<?php echo $ca[4]; ?>)">
											<button class="button">Delete</button>
											</a>
										</td>
										
									</tr>
								<?php
								}
								?>
								<tr class="activityy">
									<td colspan="4" id="totalPrice">
										<?php echo 'Total Price = RM'.number_format($totalPriceDate3,2); ?>
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<a href="activities.php<?php echo '?email='.$email; ?>">
										<button class="button">
										Add Another Activity </button></a>
									</td>
								</tr>
							</table>
						</div>
						</section>
						
					</td>
			</tr>
			</table>
			</div>	
		</div>
	</div>
	</div>
	</div>
	
	<div class="container-fluid paddding">
		<div class="row text-left">
			<div class="col-12">
				<div id="space4">
					<?php $totalTripCost = $totalPriceDate1 + $totalPriceDate2 + $totalPriceDate3; ?>
					<p><?php echo 'Total Trip Cost: <span> RM'.number_format($totalTripCost,2).'</span></p>'; ?>  
				</div>
			</div>
		</div>
	</div>
	
	<div id="space5"></div>
	
	

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


	
	

</body>
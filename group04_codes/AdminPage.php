<?php
	include 'includes/wanderlust-connect.php';
	include 'includes/wanderlust-db.php';
?>

<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8">
   <title>Wanderlust: Admin</title>
   <style>
		<?php include 'AdminPage.css';?>
   </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <script type="text/javascript">
			window.onload = function () {
				CanvasJS.addColorSet("bluepinkpurple",
				["#C7E1FA","#FADCC7"]
				);
				
				var chart = new CanvasJS.Chart("chartContainer",
				{
					backgroundColor: "",
					legend: {
						maxWidth: 350,
						itemWidth: 120
					},
					colorSet: "bluepinkpurple",
					animationEnabled: true,
					
					data: [
					{
						type: "pie",
						indexLabelFontFamily: "Comfortaa",
						indexLabelFontSize: 12,
						showInLegend: false,
						dataPoints: [
							{ y: <?php echo TotalCustomer();?>, indexLabel: "Customer" },
							{ y: <?php echo TotalTravelAgent();?>, indexLabel: "Travel Agent" },
						]
					}
					],
					
					toolTip:{
						fontFamily: "Comfortaa"
					}
					
				});
				chart.render();
			}
	</script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
	<?php include 'headerAdmin.php';?>
	<div class="container">
	  <div class="row">
		<div class="col-sm">
			<h1>Hello, Admin!</h1>
		</div>
	  </div>
	  <div class="row">
		<div class="col-sm text-center">
			<img src="list.png"> <br>
			<button class="pckgbutton" onclick="window.location.href='B-packagereq.php';">
			  New Package Requests <span class="badge badge-pill badge-warning"><?php echo countRequest();?></span>
			</button>
			<button class="pckgbutton" onclick="window.location.href='C-activities.php';">
			  Manage Solo Travel Activities
			</button>
		</div>
		<div class="col-sm text-center">
			<img src="article.png">
			<div class="card bg-transparent border-0 ">
				<h5 class="card-title">Total Articles</h5>
				<div class="card-body">
					<p id="totalarticle"><?php echo TotalArticles();?></p>
					<button class="managebutton" onclick="window.location.href='A-Manage.php';">Manage</button>
				</div>
			</div>
		</div>
		<div class="col-sm text-center">
			<img src="team.png">
			<div class="card bg-transparent border-0">
				<h5 class="card-title">Users</h5>
				<div class="card-body">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>					
				</div>
			</div>	  
		</div>
	  </div>
	</div>
	
	
	
</body>
</html>
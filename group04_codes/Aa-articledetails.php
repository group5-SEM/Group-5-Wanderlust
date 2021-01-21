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
		<?php include 'style.css';?>
   </style>
   <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm articlelist">
				<?php
					$id=$_GET['id']; //collect the ID from URL
					$articles = displaySelectedArticle($id);
					
					foreach ($articles as $details){
						echo "<h1>".$details['ArticleTitle']."</h1><br>";
						echo "<p>".$details['ArticleDescription']."</p><br>";
						echo "<br><a href=".$details['ArticleLink']." target=_blank><center>Link to full article</center></a><br>";
					}
				?>	
			</div>
		</div>
	</div>
	<br>
	<p align="center"><button class="deletebutton" onclick="confirmbox()">Delete</button></p>
	<script>
		function confirmbox(){
			if (confirm("Are you sure you want to delete this article?")==true){
				window.location.href = "Ab-delete.php?id="+<?php echo $id;?>;
			}			
		}
	</script>
	<?php
		$back = "A-Manage.php";
		include 'footerAdmin.php';
	?>
</body>
</html>
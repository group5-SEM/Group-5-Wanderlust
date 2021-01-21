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
	<?php
		$id = $_GET['id'];
		deletepackage($id);
	?>
	<script>
		window.location.href="B-packagereq.php";
	</script>
</body>
</html>
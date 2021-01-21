<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="form.css">
  <script src="form.js"></script>
  <script src="addNewArticle.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
	<header class="page-header header container-fluid">
	</header>
	<div class="overlay"></div>
	
	<div class="formContainer">
	<h1>Add New Article</h1>
	<form action="insertArticle.php" method="post" id="mainForm">
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title" id="title"/>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea rows="5" class="form-control" name="desc" id="desc"></textarea>
		</div>
		<div class="form-group">
			<label>Link</label>
			<input type="url" class="form-control" name="link" id="link"/>
		</div>
		<button type="submit" onclick="checkEmpty(event)">Submit</button>
	</form>
	</div>
	
	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
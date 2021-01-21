<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Activity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="form.css">
  <script src="form.js"></script>
  <script src="addNewActivity.js"></script>
</head>
<body>
  <div class="overlay"></div>
  
  <div class="formContainer">
	<h1>Add New Activity</h1>
	<form action="insertActivity.php" method="post" id="mainForm" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" id="name"/>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea rows="5" class="form-control" name="desc" id="desc"></textarea>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" class="form-control" name="price" step="0.01" min="0" id="price"/>
		</div>
		<div class="form-row">
			<div class="form-group">
				<label style="margin-left: 10px">Image</label>
				<input style="color: white; background: transparent; border: 1px solid transparent;" type="file" class="form-control" name="img" accept="image/png, image/jpeg" required>
			</div>
		</div>
		<div class="form-row">
		<div class="col">
			<div class="form-group">
				<button style="float: right" name="btn" type="submit" onclick="checkEmpty(event)">Submit</button>
			</div>
		</div>
		</div>
	</form>
  </div>
  <script src="jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'CustomerLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="login.css" />
   <script src="login.js"></script>
   <style>
		<?php include 'login.css'; ?>
   </style>
</head>
<body>
	<nav>
		<ul>
			<li class="rightside"><a href="signup.php">Signup</a></li>
		</ul>
	</nav>
	<form method="post" action="" id="loginForm">
		<h1>Log In</h1>
		<p id="emailSection">
			<label>Email Address:</label><br>
			<input type="email" name="email" placeholder="Email Address" id="inputsize1" class="required"/><br>
			<input type="hidden" id="emailErrorMsg" value="Please enter an email address."/>
			<p id="showEmailMessage">
		</p>
		<p id="passwordSection">
			<label>Password:</label><br>
			<input type="password" name="pwd" placeholder="Password" id="inputsize2" class="required"/>
			<input type="hidden" id="passwordErrorMsg" value="Please enter password."/>
			<p id="showPasswordMessage"></p>
		</p>
		<p>
			<input type="checkbox" name="term" value="on"/>Remember me<br>
		</p>
		<p>
			<input type="submit" value="Log In">
		</p>
		<p id="loginError">
		<?php 
			echo $message; 
			echo $goToSignup; 
		?>
		</p>
	</form>
</body>
</html>
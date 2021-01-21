<?php
include 'insertCustomerData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head lang="en">
   <meta charset="utf-8">
   <title>Signup</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="signup.css" />
   <script src="signup.js"></script>
<style>

	<?php include 'signup.css'; ?>
	<?php echo $changeColor;?>
</style>
</head>
<body>
	<nav>
		<ul>
			<li class="rightside"><a href="login.php">Login</a></li>
		</ul>
	</nav>
	<form method="post" id="signupForm" action="">
		<h1>Sign Up</h1>
		<p id="emailSection">
			<label>Email Address:</label><br>
			<input type="email" name="email" placeholder="Email Address" id="inputsize1" class="required"/><br>
			<input type="hidden" id="emailErrorMsg" value="Please enter an email address."/>
			<p id="showEmailMessage">
			<?php echo $message;?>
			</p>
		</p>
		<p id="passwordSection">
			<label>Password:</label><br>
			<input type="password" name="pwd" placeholder="Password" id="inputsize2" class="required"/>
			<input type="hidden" id="passwordErrorMsg" value="Please enter password."/>
			<p id="showPasswordMessage"></p>
		</p>
		<p>
			<input type="radio" id="customer" name="user" value="customer">
			<label for="customer">Customer</label>
			<input type="radio" value="travelAgent" name="user" value="travelAgent" checked>
			<label for="travelAgent">Travel Agent</label>
		</p>
		<p id="checkboxSection">
			<input type="checkbox" name="term" value="off" class="required"/>Yes! I would like to receive special offers, promotion and other information from WanderLust. I understand I can unsubscribe at any time.<br>
		</p>
		<p>
			<input type="submit" value="Sign Up">
		</p>
	</form>
</body>
</html>
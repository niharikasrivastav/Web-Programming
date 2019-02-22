<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><title>Registration Page|Bow Wow Dogs</title>
<link rel="stylesheet" type="text/css" href="css.css"></link>
</head>
<body>
<form method="post" action="login.php">
	<?php include('errors.php'); ?>
		<div class="container">
		<img src="logo.jpg">
			<div class="input">
				<input type="text" name="username" id="username" placeholder="Username" maxlength="20" required><br>
				<input type="text" name="email" placeholder="Email" maxlength="50" required><br>
				<input type="password" name="password_1" placeholder="Password" maxlength="20" required><br>
				<input type="password" name="password_2" placeholder="Confirm Password" maxlength="20" required><br>
			</div>
			<input type="submit" name="reg_user" value="Submit"><br>
		</div>
		<p> <font color="white"> Already a member? <a href="login.php">Sign in</a> </font>
		<p align="right"> <a href="contact.html">  <font color="white">  Contact Us! </a> </font>
</form>
</body>
</html>
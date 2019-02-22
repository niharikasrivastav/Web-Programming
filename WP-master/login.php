<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css.css"></link>
</head>
<body>
<form method="post" action="home.html">
		<?php include('errors.php'); ?>
		<div class="container">
		<img src="logo.jpg">
			<div class="input">
				<input type="text" name="username" placeholder="Username" maxlength="20" required><br>
				<input type="password" name="password" placeholder="Password" maxlength="20" required><br>
			</div>
			<input type="submit" name="login_user" value="Login"><br>
			<a href="register.php" class="rgstrlink">Register!</a>
			<p align="right"> <a href="contact.html">  <font color="white">  Contact Us! </a> </font>
		</div>
</form>
</body>
</html>
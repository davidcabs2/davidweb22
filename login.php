<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = $_POST['pwd'];
	if ($user=="ADMIN" && $pass=="ADMIN123") {
		echo "Login Succesfully!";
	}
	echo "Please enter correct username and password";
}
?>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="loginbox">
			<img src="qqq.jpg" class="avatar">
			<h1>Login Here</h1>
			<form action="" method="post">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="pwd" placeholder="Enter Password">
				<input type="submit" name="submit" value="Login">
				<a href="#">Lost your password?</a><br>
				<a href="#">Don't have an account?</a>
			</form>

		</div>


	</body>	
</head>
</html>
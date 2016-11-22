<?php
	include("dbconfig.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Recieved Login Information
		$username = mysqli_real_escape_string($dbconfig,$_POST['username']);
		$password = mysqli_real_escape_string($dbconfig,$_POST['password']);
		$sql_query = "SELECT id FROM user WHERE username='$username' and password='$password'";
		$result = mysqli_query($dbconfig,$sql_query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);// If result matched $username and $password, table row must be 1 row
		if($count == 1){
			$_SESSION['login_user']=$username;
			header("location: cms.php");
		}
		else {
			$error = "Username or Password is invalid";
		}
	}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Open Heart Reiki - login</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body id="login" class="cms">
	<div class="top-bar">
		<div class="top-bar-title">
			<img src="img/logo.png" alt="Open Heart Reiki">
		</div>
	</div>
	<div class="row">
		<div class="medium-6 medium-centered large-4 large-centered columns">

			<form>
				<div class="row column log-in-form">
					<h2 class="text-center">Log in with your username</h2>
					<label>username
						<input type="text" placeholder="somebody@example.com">
					</label>
					<label>Password
						<input type="text" placeholder="Password">
					</label>
					<input id="show-password" type="checkbox"><label for="show-password">Show password</label>
					<p><a type="submit" class="button expanded">Log In</a></p>
					<p class="text-center"><a href="#">Forgot your password?</a></p>   
				</div>
			</form>

		</div>
	</div>
</body>	
</html>
<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// Something was posted
	$name = $_POST['name'];
	$user_email = $_POST['user_email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if(!empty($name) && !empty($user_email) && !empty($password) && !empty($cpassword))
	{
		if($password != $cpassword) {
			echo "Passwords do not match!";
		} else {
			// Save to database
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$user_id = random_num(20);
			$query = "INSERT INTO user (user_id, user_email, password, name) VALUES (?, ?, ?, ?)";
			$stmt = mysqli_prepare($conn, $query);
			$password_hash = password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt, "ssss", $user_id, $user_email, $password_hash, $name);
			mysqli_stmt_execute($stmt);

			header("Location: login.php");
			die;

		}
	} else {
		echo "Please enter some valid information!";
	}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign Up</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.png" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Enter your full name">
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="user_email">E-Mail Address</label>
									<input id="user_email" type="email" class="form-control" name="user_email" required placeholder="Enter your email">
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
  									<label for="password">Password</label>
  									<div class="input-group" id="show_hide_password">
    									<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    									<div class="input-group-addon">
      										<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
    									</div>
  									</div>
								</div>

								<div class="form-group">
									<label for="cpassword">Confirm Password</label>
									<div class="input-group" id="show_hide_password">
									  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Renter your password">
									  <div class="input-group-addon">
											<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
									  </div>
									</div>
							  </div>
								
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
								<button type="submit" class="btn btn-primary btn-block" name="submit">
									Register
								</button>

								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2023 &mdash; Cognitare
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
<?php
session_start();
include("connection.php"); // includes the file with database connection credentials
include("functions.php"); // includes any necessary functions

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// Something was posted
	$user_email = $_POST['user_email'];
	$password = $_POST['password'];

	if(!empty($user_email) && !empty($password))
	{
		// Check if user exists in database
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // connects to the database using credentials defined in connection.php
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$query = "SELECT * FROM user WHERE user_email = ?";
		$stmt = mysqli_prepare($conn, $query);
		$user_email = mysqli_real_escape_string($conn, $user_email); // sanitize user input
		mysqli_stmt_bind_param($stmt, "s", $user_email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		if(mysqli_num_rows($result) == 1)
		{
			$user = mysqli_fetch_assoc($result);

			if(password_verify($password, $user['password']))
			{
				// Login successful
				$_SESSION['user_id'] = $user['user_id'];
				header("Location: home.php");
				die;
			} else {
				echo "Incorrect email or password!"; // changed error message to be more user-friendly
			}
		} else {
			echo "Incorrect email or password!";
		}

		mysqli_close($conn); // closes database connection
	} else {
		echo "Please enter both email and password!";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Page</title>
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
						<img src="img/logo.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="user_email">E-Mail Address</label>
									<input id="user_email" type="email" class="form-control" name="user_email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.php" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="register.php">Create One</a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>

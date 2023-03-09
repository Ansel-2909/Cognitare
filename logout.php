<?php
session_start();
if (isset($_POST['submit'])) {
	session_unset();
	session_destroy();
	header("Location: home.php");
	exit;
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Logout Page</title>
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
							<h4 class="card-title">Logout</h4>
	<h1>Are you sure you want to logout?</h1>
	<form method="POST">
		<div class="form-group m-0">
			<button type="submit" class="btn btn-primary btn-block" name="submit" value="Logout">
				Logout
			</button>
		</div>
	</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>

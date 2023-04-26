<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Login</title>
	<link rel="shortcut icon" type="image/jpg" href="images/logo2.png"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap Icons CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="style.css">

</head>
<body style="background-color: #012B28;">
	<div class="container p-5">
	<div class="row border rounded" style="background-color: #EBB42C; width: 800px; height: 300px; margin: auto;">
			<div class="col-lg-6 d-flex align-items-center justify-content-center">
				<img src="images/logo1.png" class="img-fluid">
			</div>	
			<form class="col-lg-6" action="processors/login.php" method="POST">
				<div class="form-group">
					<center>						
						<h6>Login</h6>
					</center>

				</div>	
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
					value="<?php if(isset($_SESSION['err_email'])){echo $_SESSION['err_email'];}?>">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required" 
					value="<?php if(isset($_SESSION['err_password'])){echo $_SESSION['err_password'];}?>">
					<small class="<?php if(isset($_GET['error'])){}else{echo "d-none";}?>" 
						style="color: red;">Invalid username and/or password</small>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Remember Me</label>
					</div>
					<a href="register.php" class="btn btn-danger ">Register</a>
					<button type="submit" class="btn btn-primary ">Log In</button>	
				</form>	
			</div>
		</div>
	</body>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="bootstrap/js/slim.js"></script>
	<!-- Popper.JS -->
	<script src="bootstrap/js/popper.js"></script>
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.js"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="bootstrap/js/scroller.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#sidebar").mCustomScrollbar({
				theme: "minimal"
			});

			$('#sidebarCollapse').on('click', function () {
				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			});
		});
	</script>

	</html>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Register</title>
	<link rel="shortcut icon" type="image/jpg" href="images/logo2.png" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap Icons CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="style.css">


</head>

<body style="background-color: #012B28;">
	<div class="container p-5">
		<div class="row p-2 border rounded bg-white" style="background-color: #EBB42C;">
			<div class="col-lg-6 d-flex align-items-center justify-content-center" style="background-color: #EBB42C !important;">
				<img src="images/register-bg.jpg" class="img-fluid">
			</div>
			<form class="col-lg-6" action="processors/register.php" method="POST">
				<div class="form-group">
					<center>
						<h2>Cognitare</h2>
						<h6>Register Here</h6>
					</center>

				</div>
				<div class="row">
					<div class="form-group col-lg-6 col-sm-12">
						<label for="fname">Firstname<span style="color: red;">*</span></label>
						<input name="fname" type="text" class="form-control" placeholder="eg. Ansel" required="required" value="<?php if (isset($_SESSION['err_fname'])) {
																																	echo $_SESSION['err_fname'];
																																} ?>">
					</div>
					<div class="form-group col-lg-6 col-sm-12">
						<label for="mname">Middle Name</label>
						<input name="mname" type="text" class="form-control" placeholder="eg. Lian" value="<?php if (isset($_SESSION['err_mname'])) {
																												echo $_SESSION['err_mname'];
																											} ?>">
					</div>
					<div class="form-group col-lg-6 col-sm-12">
						<label for="lname">Last Name<span style="color: red;">*</span></label>
						<input name="lname" type="text" class="form-control" placeholder="eg. Dsouza" required="required" value="<?php if (isset($_SESSION['err_lname'])) {
																																	echo $_SESSION['err_lname'];
																																} ?>">
					</div>
					
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address<span style="color: red;">*</span></label>
					<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eg. ansel@gmail.com" required="required" value="<?php if (isset($_SESSION['err_email'])) {
																																													echo $_SESSION['err_email'];
																																												} ?>">
					<small id="emailHelp" class="">We'll never share your email with anyone else.</small>
					<small class="<?php if (isset($_GET['error'])) {
									} else {
										echo "d-none";
									} ?>" style="color: red;">This email is used already by another user</small>
				</div>
				<div class="form-group">
					<label for="username">Username<span style="color: red;">*</span></label>
					<input id="myInput" name="username" type="text" class="form-control" placeholder="eg. ansel.d" required="required" value="<?php if (isset($_SESSION['err_username'])) {
																																				echo $_SESSION['err_username'];
																																			} ?>">
					<small id="emailHelp" class="">You can change your username later.</small>

				</div>
				<div class="form-group">
				<label for="password">Password<span style="color: red;">*</span></label>
					<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required" value="<?php if (isset($_SESSION['err_password'])) {
																																									echo $_SESSION['err_password'];
																																								} ?>">
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1" required="required" data-toggle="modal" data-target="#showTermsCondition">
					<label class="form-check-label" for="exampleCheck1">I Agree to the Terms and Conditions</label>
				</div>
				<div style="color: red; margin-top: 10px;">Please note that the fields marked with an asterisk (*) are mandatory and must be filled out.</div>
				<button type="submit" class="btn btn-primary pull-right">Submit</button>
			</form>
		</div>
	</div>
	<h8>Please note that the fields marked with an asterisk (*) are mandatory and must be filled out.</h8>
	<?php
	require('config.php');
	$sql = "SELECT * FROM about_info WHERE ab_id='9'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$info = $row;
		}
	}
	?>

	<!--Modal for Add Information-->
	<div class="modal fade" id="showTermsCondition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Terms And Condition</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<div class="form-group">
							<textarea name="content" type="text" class="form-control" placeholder="Enter Information" required="required" rows="15" value=""><?php echo $info['ab_content'] ?></textarea>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
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
	$(document).ready(function() {
		$("#sidebar").mCustomScrollbar({
			theme: "minimal"
		});

		$('#sidebarCollapse').on('click', function() {
			$('#sidebar, #content').toggleClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});
	});
</script>

</html>
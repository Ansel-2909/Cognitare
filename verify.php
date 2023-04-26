<?php
session_start();
include('config.php');

// Check if user is already logged in
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
  header('Location: login.php');
  exit;
}

// Check if email has been verified already
if(isset($_SESSION['u_email_verified']) && $_SESSION['u_email_verified'] === true) {
  header('Location: home.php');
  exit;
}

// Generate a cryptographically secure random 5-digit OTP
$otp = rand(10000, 99999);
if (function_exists('random_bytes')) {
  $otp = bin2hex(random_bytes(2));
} else if (function_exists('openssl_random_pseudo_bytes')) {
  $otp = bin2hex(openssl_random_pseudo_bytes(2));
}

// Send the OTP to the user's email address
$to = $_SESSION['u_email'];
$subject = 'Verify Your Email Address';
$message = 'Your OTP is: ' . $otp;
$headers = 'From: yourname@example.com' . "\r\n" .
    'Reply-To: yourname@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
  // Handle invalid email address
  header('Location: error.php');
  exit;
}

if (!mail($to, $subject, $message, $headers)) {
  // Handle email sending error
  header('Location: error.php');
  exit;
}

$_SESSION['u_email_otp'] = $otp;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Verify Email Address</title>
</head>
<body>
  <h1>Verify Your Email Address</h1>
  <p>An OTP has been sent to your email address.</p>
  <form action="verify-process.php" method="post">
    <label for="otp">Enter OTP:</label>
    <input type="text" name="otp" id="otp" required>
    <button type="submit">Verify</button>
  </form>
</body>
</html>

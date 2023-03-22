<?php
session_start();

include("connection.php");
include("functions.php");
include("header.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Connect to database
$dbhost = "localhost";
$dbname = "register_db";
$dbuser = "root";
$dbpass = "";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Retrieve user data from database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE user_id = $user_id";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
} else {
    die('User not found');
}

// Display user profile
?>

<!DOCTYPE html>
<html>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h1 style="color: #1C6EA4; font-size: 2.5em; text-align: center;">Welcome, <?php echo $user['name']; ?></h1>
        <head>
            <title>Profile - <?php echo $user['name']; ?></title>
        </head>
        <p style="font-size: 1.2em;">Email: <?php echo $user['user_email']; ?></p>
        <p style="font-size: 1.2em;">Mobile: <?php echo $user['mobile']; ?></p>
        <a href="logout.php">Logout</a>
        <a href="home.php" style="display: block; margin-top: 20px;">Back</a>
    </div>
<?php include("footer.php"); ?>

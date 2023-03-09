<?php
$dbhost = "localhost";
$dbname = "register_db";
$dbuser = "root";
$dbpass = "";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>

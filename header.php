<?php

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="test-assests/script.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="career.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="holland.js"></script>
    <link rel="stylesheet" href="css/holland.css">
    <title>Cognitare | Discover Yourself</title>
</head>

<body>
    <header style="position: relative;">
        <div class="w3-top" class="header" id="home">
            <div class="w3-bar w3-card w3-left-align w3-large heeder-large-screen" style="background-color: rgba(1, 43, 40, 1.0);">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">Cognitare</a>
                <div>
                    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">About</a>
                    <a href="career.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Career</a>
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-hover-black">Tests</button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="holland.php" class="w3-bar-item w3-button">Career Test</a>
                            <a href="big5.php" class="w3-bar-item w3-button">Big Five Personality Test</a>
                            <a href="dat.php" class="w3-bar-item w3-button">DAT</a>
                        </div>
                    </div>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Contact</a>
                    <?php if (!$user_data) { ?>
                        <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Login</a>
                        <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Register</a>
                    <?php } else { ?>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Logout</a>
                        <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Profile</a>
                    <?php } ?>
                </div>
            </div>
        </div>



        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block  w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">About</a>
            <a href="#tests" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Tests</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
            <?php if (!$user_data) { ?>
                <a href="login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Login</a>
                <a href="register.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Register</a>
            <?php } else { ?>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Logout</a>
                <a href="profile.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
            <?php } ?>
        </div>


    </header>
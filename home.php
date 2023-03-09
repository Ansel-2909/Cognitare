<?php
session_start();

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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cognitare | Discover Yourself</title>
</head>
<body>
    <header style="position: relative;">
        <div class="w3-top" class="header" id="home">
            <div class="w3-bar w3-card w3-left-align w3-large heeder-large-screen" style="background-color: rgba(1, 43, 40, 1.0);">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">Cognitare</a>
                <div >
                    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">About</a>
                    <a href="#tests" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Tests</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Contact</a>
                    <?php if(!$user_data){ ?>
                        <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Login</a>
                        <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Register</a>
                    <?php }else{ ?>
                        <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Logout</a>
                        <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black">Profile</a>
                    <?php } ?>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block  w3-hide w3-hide-large w3-hide-medium w3-large">
               <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">About</a>
                <a href="#tests" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Tests</a>
                <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
                  <?php if(!$user_data) 
                    { ?>
                      <a href="login.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Login</a>
                      <a href="register.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Register</a>
                  <?php } else { ?>
                    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Logout</a>
                    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Profile</a>
                  <?php } ?>
                  </div>


    </header> 


      <section >
         <div class="hero" id="about">
           <div class="hero-description">
             <div class="hero-text">
              <h1 class="hero-title">Discover Yourself</h1>
              <p>
                Take our free personality and career tests to learn more about who you are and what you should be doing.              </p>
              <span class="w3-text-white social" style="margin-top:050px">
                <p >Follow us on Social media</p>
                <div class="w3-margin-top">
             <a href="#">  <i class="fa fa-facebook-official w3-hover-opacity icons" ></i></a> 
             <a href="#"><i class="fa fa-instagram w3-hover-opacity icons" ></i></a> 
             <a href="#"><i class="fa fa-snapchat w3-hover-opacity icons"></i></a>  
             <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity icons" ></i></a>  
             <a href="#"><i class="fa fa-twitter w3-hover-opacity icons"></i></a>  
             <a href="#"><i class="fa fa-linkedin w3-hover-opacity icons"></i></a>  
             </div>
              </span>
             </div>
           </div>
         </div>
      </section>
      <main style="padding-bottom:40px ;">
        <h2 class="title" id="tests">List of Tests</h2>
        <div class="tests">
          <div class="test-list">
            <img src="img/careertest.jpg" style="width:100px; height: 100px;" >
          <h3>Career Test</h3>
          <p></p>
          </div>
          <div class="test-list">
              <img src="img/big5.png" style="width:100px; height: 100px;" >
            <h3>Big Five Personality Test</h3>
            <p></p>
          </div>
          <div class="test-list">
            <img src="img/careerguidance.png" style="width:100px; height: 100px;" >            
            <h3>DAT</h3>
            <p></p>
          </div>
        </div>
          
        
        </div>
               
    </main>
    <div class="w3-padding w3-center" style="background: #F5CA5A;padding: 10px 0px !important; color:#282A35;">
    
      <h2 class="title" style="color: black;">Reach out to us</h2>
      <div class="contact" id="contact" style="padding-bottom: 10px !important;">
        <div class="contact-list contact-address">
          <h5><span><i class="fa fa-map-marker w3-xlarge w3-text-black"></i></span>Address</h5>
          <p style="color: black;">Don Bosco Institute Of Technology, </p>
          <p style="color: black;">Kurla, Mumbai, </p>
          <p style="color: black;">Maharashtra 400070 </p>
        </div>
        <div class="contact-list">
          <h5><span><i class="fa fa-envelope w3-xlarge w3-text-black"></i></span>Receive weekly update email</h5>
          <div class="email-contact">
            <input placeholder="Email" type="email" style="margin: 8px 0px !important;" />
            <button class="w3-btn w3-red w3-round" style="width: 100px; padding:3px 10px !important">Subscribe</button>
          </div>
        </div>
        <div class="contact-list">
          <h5><span><i class="fa fa-phone w3-xlarge w3-text-black"></i></span>Phone</h5>
          <p style="color: black;">90043 92252 </p>
          <p style="color: black;">98927 42122 </p>
        </div>
      </div>
    </div>
    
        
      
  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else { 
        x.className = x.className.replace(" w3-show", "");
      }
    }
    </script>
</body>
</html>
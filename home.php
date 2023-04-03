<?php
session_start();
include("header.php");
include("connection.php");
include("functions.php");



?>

<section>
  <div class="hero" id="about">
  <video src="img/background.mp4" autoplay muted loop></video>
    <div class="hero-description">
      <div class="hero-text">
        <h1 class="hero-title">Discover Yourself</h1>
        <p>
          Take our free personality and career tests to learn more about who you are and what you should be
          doing. </p>
          
        <span class="w3-text-white social" style="margin-top:050px">
          <p>Follow us on Social media</p>
          <div class="w3-margin-top">
            <a href="#"> <i class="fa fa-facebook-official w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-snapchat w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity icons"></i></a>
          </div>
        </span>
      </div>
    </div>
  </div>
</section>
<main style="padding-bottom:40px;">
  <h2 class="title" id="tests">List of Tests</h2>
  <div class="tests">
    <div class="test-list">
      <?php if(isset($_SESSION['user_id'])) { ?>
        <a href="take-test.php">
          <img src="img/careertest.jpg" style="width:100px; height: 100px;" >
          <h3>Career Test</h3>
        </a>
      <?php } else { ?>
        <span>
          <img src="img/careertest.jpg" style="width:100px; height: 100px;" >
          <h3>Career Test</h3>
          <a href="login.php"></a>
        </span>
      <?php } ?>
      <p></p>
    </div>
    <div class="test-list">
      <?php if(isset($_SESSION['user_id'])) { ?>
        <a href="big5.php">
          <img src="img/big5.png" style="width:100px; height: 100px;" >
          <h3>Big Five Personality Test</h3>
        </a>
      <?php } else { ?>
        <span>
          <img src="img/big5.png" style="width:100px; height: 100px;" >
          <h3>Big Five Personality Test</h3>
          <a href="login.php"></a>
        </span>
      <?php } ?>
      <p></p>
    </div>
    <div class="test-list">
      <?php if(isset($_SESSION['user_id'])) { ?>
        <a href="dat.php">
          <img src="img/careerguidance.png" style="width:100px; height: 100px;" >            
          <h3>DAT</h3>
        </a>
      <?php } else { ?>
        <span>
          <img src="img/careerguidance.png" style="width:100px; height: 100px;" >            
          <h3>DAT</h3>
          <a href="login.php"></a>
        </span>
      <?php } ?>
      <p></p>
    </div>
  </div>
</main>


<?php include("footer.php"); ?>
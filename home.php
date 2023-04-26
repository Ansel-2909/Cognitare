<?php include('header.php') ?>

<section>
  <div class="hero" id="about">
    <video src="images/background.mp4" autoplay muted loop width="250%" height="250%"></video>
    <div class="hero-description">
      <div class="hero-text">
        <div class="content">

          <h2>Cognitaire</h2>
          <h4 class="hero-title">Discover Yourself</h4>
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
  <h2 class="title" id="tests">List of Test</h2>
  <div class="tests">
    <div class="test-list">
      <?php if (isset($_SESSION['u_id'])) { ?>
        <a href="take-test.php">
          <img src="images/careertest.jpg" style="width:100px; height: 100px;">
          <h3>Career Test</h3>
        </a>
      <?php } else { ?>
        <span>
          <img src="img/careertest.jpg" style="width:100px; height: 100px;">
          <h3>Career Test</h3>
          <a href="login.php"></a>
        </span>
      <?php } ?>
    </div>
    </div>
    <br></br>
    <br></br>
  <div class="w3-padding w3-center" style="background: #F5CA5A; padding: 10px 0px !important; color:#282A35; width: 100%; text-align: left;">
    <h2 class="title" style="color: black;">Reach out to us</h2>
    <div class="contact" id="contact" style="padding-bottom: 0px !important;">
      <div class="contact-list contact-address">
        <h5><span><i class="fa fa-map-marker w3-xlarge w3-text-black"></i></span>Address</h5>
        <p style="color: black; font-weight: bold;">Don Bosco Institute Of Technology, </p>
        <p style="color: black; font-weight: bold;">Kurla, Mumbai, </p>
        <p style="color: black; font-weight: bold;">Maharashtra 400070 </p>
      </div>
      <div class="contact-list">
      <h5><span><i class="fa fa-phone w3-xlarge w3-text-black"></i></span>Phone</h5>
        <p style="color: black; font-weight: bold;">90043 92252 </p>
        <p style="color: black; font-weight: bold;">98927 42122 </p>
        <p style="color: black; font-weight: bold;">91520 94866 </p>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
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
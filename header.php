<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="test-assets\style3.css">
  <title>Cognitare</title>
  <link rel="shortcut icon" type="image/jpg" href="images/logo2.png"/>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="test-assests/script.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap Icons CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- <?php
  $user = [];
  require ('config.php');
  if(isset($_SESSION['u_id'])){
    $sql = "SELECT * FROM users WHERE u_id='".$_SESSION['u_id']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user = $row;
      }
    }
  }

  $fullname = $user['u_fname'].' '.$user['u_mname'].' '.$user['u_lname'] .' '.$user['u_ext'];
  ?> -->

</head>

<body style="background-color: #FFFDD0;">

 <div class="wrapper">
  <!-- Sidebar  -->
  <nav id="sidebar">
    <div id="dismiss">
      <i class="bi bi-arrow-left"></i>
    </div>

    <div class="sidebar-header">
      <h3>Cognitare</h3>
    </div>

    <ul class="list-unstyled components">
      <li class="text-truncate <?php if(isset($_GET['page']) && $_GET['page']=="my-profile"){echo "active";}?>">
        <a href="controller.php?page=my-profile"><i class="bi bi-person bi-2x"> </i><?php 
        echo $fullname;?></a>
      </li>
      <li class="<?php if(isset($_GET['page']) && $_GET['page']=="home"){echo "active";}?>">
        <a href="controller.php?page=home"> <i class="bi bi-house bi-2x"></i> Home</a>
      </li>
      <li class="<?php if(isset($_GET['page']) && $_GET['page']=="career"){echo "active";}?>">
        <a href="controller.php?page=career"> <i class="bi bi-stack bi-2x"></i> Careers</a>
      </li>
      <li class="<?php if(isset($_GET['page']) && $_GET['page']=="take-test"){echo "active";}?>">
        <a href="controller.php?page=take-test"> <i class="bi bi-table bi-2x"></i> Take the Test</a>
      </li>
      <li class="<?php if(isset($_GET['page']) && $_GET['page']=="test-result"){echo "active";}?>">
        <a href="controller.php?page=test-result"> <i class="bi bi-activity bi-2x"></i> Test Result</a>
      </li>
      <li class="<?php if(isset($_GET['page']) && $_GET['page']=="feedbacks"){echo "active";}?>
      <?php if($_SESSION['u_role'] !=  "admin"){echo "d-none";}?>">
      <a href="controller.php?page=feedbacks"> <i class="bi bi-reply bi-2x"></i> Feedbacks</a>
    </li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=="about"){echo "active";}?>">
      <a href="controller.php?page=about"> <i class="bi bi-question-circle bi-2x"></i> About</a>
    </li>
    <li class="">
      <a href="processors/logout.php"> <i class="bi bi-box-arrow-right bi-2x"></i> Log Out</a>
    </li>
  </ul>

  <ul class="list-unstyled CTAs">
    <center>
      <div class="footer-text">All Rights Reserved.<br>Copyright &copy; 2021</div>
    </center>
  </ul>
</nav>

<!-- Page Content  -->
<div id="content">

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #EBB42C;">
    <div class="container-fluid">

      <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: #05410b">
        <i class="bi bi-list"></i> Menu
      </button>
    </div>
  </nav>




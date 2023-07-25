<?php
include "connection.php";
session_start();

if ($_SESSION['aname'] == '') {
  header("Location:admin_login.php");
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_mediCare</title>
    <link rel="icon" type="image/png" href="img/medicare.png"/>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </head>
  <body>

  <header class="header-section bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="logo">
            <a href="index.php">
              <img width="20%" src="img/medicare.png" alt="">
            </a>
          </div>
        </div>

        <div class="col-md-8">
          <div class="nav mt-4">
            <ul>
              <li><a style="text-decoration: none;" href="admin_profile.php">Home</a></li>
              <li><a style="text-decoration: none;" href="admin_user.php">Users</a></li>
              <li><a style="text-decoration: none;" href="admin_medicine.php">Medicines</a></li>
              <li><a style="padding: 10px; background: rgba(0,0,0,0); color: white; text-decoration: none;" href="admin_signout.php"><button type="button" class="btn btn-danger btn-sm">Sign Out</button></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header End-->

  <!--Banner-->
  <div class="banner">
    <center><br><br>
      <div class="text1">
        <strong>Welcome <?php echo $_SESSION['aname'];?></strong><br>
        <div class="green_line"></div>
        <img width="20%" src="img/medicare.png" alt="">

      <div class="t2">
        <br>
        Learn about all medications <strong class="text-success">&</strong> Have a healthy life.<br> <br>

        <a style="text-decoration: none; padding-left:5px;" href="admin_about.php"><input type="submit" class="btn1" value="About More"></input></a><br><br><br><br>
      </div>
  </div>

  </center>
  </div>
  <!--Banner End-->


  <!--part 1-->
  <div class="part1">
    <center>
      <span class="txt1"><strong>Simple & Pure Information.</strong></span><br><br>
      <span class="txt2">
        Here, you can search about any kind of <strong>Medicine</strong>. And given pure information easyly.
      </span>
    </center>
  </div>
  <!--part 1 End-->


  <!--part 2-->
  <div class="part2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center> <strong> <h3>Developers Information</h3> </strong> </center><br>
        </div>
      </div>
      <div class="row">
        <center>
          <div class="col-md-6" style="padding-left:3%; padding-right:3%; padding-bottom:3%;">
            <div class="logo">
              <img src="img/sumit.jpg" class="rounded-circle" style="width:50%" alt="">
            </div>
            <h5>Back-End Developer</h5>
            <span class="txt3">This Site have a complex back-end.</span>
          </div>

          <div class="col-md-6" style="padding-left:3%; padding-right:3%; padding-bottom:3%;">
            <div class="logo">
              <img src="img/sajia.png" class="rounded-circle" style="width:50%" alt="">
            </div>
            <h5>Font-End Developer</h5>
            <span class="txt3">This site is looking sweet and full responsive</span>
          </div>

        </center>
      </div>
    </div>
  </div>
  <!--part 2 End-->



  <!--footer-->
  <header class="header-section">
    <p></p>
    <br><br><br><br><br><br><br><br><br>
  </header>
  <header class="header-section bg-dark" style="margin-top:10%; position:fixed; bottom: 0px;>
    <div class="container">

      <div class="row" >
        <div class="col-md-12" style="text-align:center; padding:2%">
          <span style="color:#5FB05B;">Copyright2023,mediCare </br>Daffodil International University</span>
        </div>
      </div>

    </div>
  </header>

  </body>
</html>

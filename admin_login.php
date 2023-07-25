<?php
include "connection.php";
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_Login</title>
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
                  <li><h3 style="color:#5FB05B"> <strong>Admin Panel</strong> </h3></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--Header End-->


  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>

  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Admin Login</h4>
              </div>
              <div class="card-body">
                <form class="" action="admin_login.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Admin Name</label>
                    <input type="text" class="form-control" placeholder="Enter admin name" name="aname" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Admin Password</label>
                    <input type="password" class="form-control" placeholder="Enter admin password" name="apass" value="" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <button name="alogin" class="btn btn-info" value="Insert" type="submit" name="button" style="color:white;">Login</button>
                  </div>
                </form>

                <?php
                if (isset($_POST['alogin'])) {
                  $aname = $_POST['aname'];
                  $apass = $_POST['apass'];

                  $count = 0;
                  $sql = "SELECT * FROM admin WHERE aname='$aname' && apass='$apass'";
                  $result = mysqli_query($conn, $sql);
                  $count = mysqli_num_rows($result);

                  if($count == 0){
                    echo ' </br><div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Hay!</strong> Wrong username or password!
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    elseif($count > 0) {
                      $_SESSION['aname'] = $aname;
                      header("Location:admin_profile.php");
                      $count = 0;
                    }
                  }
                   ?>


              </div>
            </div>
          </div>
        </div>
      </div>





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

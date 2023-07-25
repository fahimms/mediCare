<?php
include "connection.php";
session_start();


if ($_SESSION['aname'] == '') {
  header("Location:admin_login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin_medicine</title>
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
                  <img width="20%" src="img/medicare.png" alt="">
              </div>
            </div>

            <div class="col-md-8">
              <div class="nav mt-4">
                <ul  style="z-index: 4;" >
                  <li><a style="text-decoration: none;" href="admin_profile.php"> Home</a></li>
                  <li><a style="text-decoration: none;" href="admin_about.php"> About</a></li>
                  <<li><a style="padding: 10px; background: rgba(0,0,0,0); color: white; text-decoration: none;" href="admin_signout.php"><button type="button" class="btn btn-danger btn-sm">Sign Out</button></a></li>
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
                <h4>Add Medicine</h4>
              </div>
              <div class="card-body">
                <form class="" action="admin_madd.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Medicine Name</label>
                    <input type="text" class="form-control" placeholder="Enter Medicine Name" name="mname" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Work</label>
                    <input type="text" class="form-control" placeholder="Enter Work" name="mwork" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Discription</label>
                    <textarea class="form-control" name="mdiscription" placeholder="Enter Discription" value="" rows="7" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Profile Picture</label>
                    <input type="file" accept="image/*" class="form-control" name="mimg" value="" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <button name="madd" class="btn btn-success" value="Insert" type="submit" name="button" style="color:white;">Add Medicine</button>
                    <a style="text-decoration: none; padding-left:25px;" href="admin_medicine.php"><button type="button" class="btn btn-danger" style="color:white;">Return</button></a>
                  </div>
                </form>

                <!--PHP sign up backend-->

                <?php
                if (isset($_POST['madd'])) {
                  $mname = $_POST['mname'];
                  $mimg = $_FILES['mimg']['name'];
                  $mwork = $_POST['mwork'];
                  $mdiscription = $_POST['mdiscription'];

                  $count = 0;
                  $sql = "Select * from medicine where mname='$mname' && mimg='$mimg'";
                  $result = mysqli_query($conn, $sql);
                  $count = mysqli_num_rows($result);

                  if (!$result) {
                    echo "error";
                  }

                  if($count == 0){

                    $sql = "INSERT INTO `medicine`(`id`, `mname`, `mimg`, `mwork`, `mdiscription`) VALUES (NULL,'$mname','$mimg','$mwork','$mdiscription')";
                    $result = mysqli_query($conn, $sql);

                    $move_img = move_uploaded_file($_FILES['mimg']['tmp_name'], "medicine_img/".$_FILES['mimg']['name']);
                    if (!$move_img) {
                      echo "img error";
                    }

                    $_SESSION['madd_ok'] = "Registration Success!";
                    header("Location:admin_medicine.php");
                    $count = 0;

                   }

                   elseif($count != 0) {
                     echo ' </br><div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <strong>Hay!</strong> Medicine already exist!
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>';
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

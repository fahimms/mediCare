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
    <title>admin_user</title>
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
                <h4>Edit User Information</h4>
              </div>
              <div class="card-body">
                <?php
                $id= $_GET['id'];
                $sql = "SELECT * FROM user WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  foreach ($result as $row) {
                    ?>
                <form class="" action="admin_uedit2.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="uname" value="<?php echo $row['uname']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">User Password</label>
                    <input type="text" class="form-control" placeholder="Enter password" name="upass" value="<?php echo $row['upass']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" name="unumber" value="<?php echo $row['unumber']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter email adderess" name="uemail" value="<?php echo $row['uemail']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Profile Picture</label>
                    <img src="<?php echo 'user_img/'.$row['uimg']; ?>" width="3%" alt="img">
                    <input type="file" accept="image/*" class="form-control" name="uimg" value="" required>
                    <input type="hidden" accept="image/*" class="form-control" name="ouimg" value="<?php echo $row['uimg']; ?>">
                  </div>
                  <br>
                  <div class="form-group">
                    <button name="uedit" class="btn btn-success" value="Insert" type="submit" name="button" style="color:white;">Update User</button>
                    <a style="text-decoration: none; padding-left:25px;" href="admin_user.php"><button type="button" class="btn btn-danger" style="color:white;">Return</button></a>
                  </div>
                </form>
                <?php
                  }
                }
                else {
                  echo "No Record Available";
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

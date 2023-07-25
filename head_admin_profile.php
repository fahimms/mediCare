<?php
include "connection.php";
session_start();


if ($_SESSION['hname'] == '') {
  header("Location:head_admin_login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Head_Admin</title>
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
                  <li><a style="padding: 10px; background: rgba(0,0,0,0); color: white; text-decoration: none;" href="head_admin_signout.php"><button type="button" class="btn btn-danger btn-sm">Sign Out</button></a></li>
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
                <?php
                  if (isset($_SESSION['aadd_ok'])) {
                 ?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Hay!</strong> <?php echo $_SESSION['aadd_ok']; ?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>

                  <?php
                     unset($_SESSION['aadd_ok']);
                    }
                   ?>

                   <?php
                     if (isset($_SESSION['aedit_ok'])) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <strong>Hay!</strong> <?php echo $_SESSION['aedit_ok']; ?>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                     <?php
                        unset($_SESSION['aedit_ok']);
                       }
                      ?>

                      <?php
                        if (isset($_SESSION['adelete'])) {
                       ?>
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Hay!</strong> <?php echo $_SESSION['adelete']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>

                        <?php
                           unset($_SESSION['adelete']);
                          }
                         ?>

                <h4>Admin Information</h4>

                <form class="" action="head_admin_profile.php" method="post">
                  <input type="text" class="" placeholder="search..." name="infosearch" value="" required>
                  <button name="asearch" class="btn btn-info btn-sm" value="Insert" type="submit" name="button" style="color:white;">Search</button>
                  <a style="text-decoration: none;" href="admin_aadd.php"><button type="button" class="btn btn-success btn-sm" style="color:white;">Add Admin</button></a>
                </form>

              </div>
              <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $infosearch = $_POST['infosearch'];
                  if (isset($_POST['asearch'])) {
                      $sql = "SELECT * FROM admin WHERE aname='$infosearch'";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $row) {
                          ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['aname']; ?></td>
                            <td><?php echo $row['apass']; ?></td>
                            <td> <a href="admin_aedit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a> </td>
                            <td> <a href="admin_adelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a> </td>
                          </tr>
                          <?php
                        }
                      }
                      else {
                        ?>
                        <tr>
                          <td>No Record Available</td>
                        </tr>
                        <?php
                      }
                    }
                  else {

                      $sql = "SELECT * FROM admin";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $row) {
                          ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['aname']; ?></td>
                            <td><?php echo $row['apass']; ?></td>
                            <td> <a href="admin_aedit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a> </td>
                            <td> <a href="admin_adelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a> </td>
                          </tr>
                          <?php
                        }
                      }
                      else {
                        ?>
                        <tr>
                          <td>No Record Available</td>
                        </tr>
                        <?php
                      }
                  }
                   ?>
                </tbody>
              </table>
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

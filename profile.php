<?php
include "connection.php";
session_start();
if ($_SESSION['uname'] == '') {
  header("Location:login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile</title>
    <link rel="icon" type="image/png" href="img/medicare.png"/>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </head>
  <body>


    <div class="profile_info">
      <br>
      <?php echo $_SESSION['uname']; ?>
      <img class="rounded-circle" src="<?php echo 'user_img/'.$_SESSION['uimg'] ?>" width="35px" alt="img">
    </div>



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
                  <li><a style="text-decoration: none;" href="profile.php"> Home</a></li>
                  <li><a style="text-decoration: none;" href="profile_about.php"> About</a></li>
                  <li><form class="" action="profile.php" method="post"><input style="" placeholder="search..." type="text" name="infosearch" value=""><button name="msearch" class="btn btn-primary btn-sm" value="Insert" type="submit" name="button" style="color:white;">Search</form></li>
			            <li><a style="padding: 10px; background: rgba(0,0,0,0); color: white; text-decoration: none;" href="signout.php"><button type="button" class="btn btn-danger btn-sm">Sign Out</button></a></li>
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
                <h4>Medicines Information</h4>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Medicine Name</th>
                      <th>Picture</th>
                      <th>Work</th>
                      <th>Discription</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $infosearch = $_POST['infosearch'];
                    if (isset($_POST['msearch'])) {
                        $sql = "SELECT * FROM medicine WHERE mname='$infosearch' or mwork='$infosearch' ";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          foreach ($result as $row) {
                            ?>
                            <tr>
                              <td><?php echo $row['mname']; ?></td>
                              <td> <img src="<?php echo 'medicine_img/'.$row['mimg']; ?>" width="80px" alt="img"> </td>
                              <td><?php echo $row['mwork']; ?></td>
                              <td><?php echo $row['mdiscription']; ?></td>
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

                        $sql = "SELECT * FROM medicine";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          foreach ($result as $row) {
                            ?>
                            <tr>
                              <td><?php echo $row['mname']; ?></td>
                              <td> <img src="<?php echo 'medicine_img/'.$row['mimg']; ?>" width="80px" alt="img"> </td>
                              <td><?php echo $row['mwork']; ?></td>
                              <td><?php echo $row['mdiscription']; ?></td>
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

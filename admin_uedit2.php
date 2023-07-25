<?php
include "connection.php";
session_start();


$id= $_GET['id'];

if (isset($_POST['uedit'])) {
  $id= $_GET['id'];
  $uname = $_POST['uname'];
  $upass = $_POST['upass'];
  $unumber = $_POST['unumber'];
  $uemail = $_POST['uemail'];
  $uimg = $_FILES['uimg']['name'];
  $ouimg = $_POST['ouimg'];

  $sql = 'UPDATE user SET uname="'.$uname.'", upass="'.$upass.'", unumber="'.$unumber.'", uemail="'.$uemail.'", uimg="'.$uimg.'" WHERE id ="'.$id.'"';
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if (!$result) {
    echo "<br>Fail";
  }
  else {
    unlink('user_img/'.$ouimg);
    move_uploaded_file($_FILES['uimg']['tmp_name'], "user_img/".$_FILES['uimg']['name']);

    $_SESSION['uedit_ok'] = "Edit Success!";
    header("Location:admin_user.php");
  }
}
 ?>

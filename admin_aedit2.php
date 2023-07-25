<?php
include "connection.php";
session_start();


$id= $_GET['id'];

if (isset($_POST['aedit'])) {
  $id= $_GET['id'];
  $aname = $_POST['aname'];
  $apass = $_POST['apass'];
  $omimg = $_POST['omimg'];

  $sql = 'UPDATE admin SET aname="'.$aname.'", apass="'.$apass.'" WHERE id ="'.$id.'"';
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if (!$result) {
    echo "<br>Fail";
  }
  else {
    $_SESSION['aedit_ok'] = "Edit Success!";
    header("Location:head_admin_profile.php");
  }
}
 ?>

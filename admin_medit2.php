<?php
include "connection.php";
session_start();


$id= $_GET['id'];

if (isset($_POST['medit'])) {
  $id= $_GET['id'];
  $mname = $_POST['mname'];
  $mimg = $_FILES['mimg']['name'];
  $mwork = $_POST['mwork'];
  $mdiscription = $_POST['mdiscription'];
  $omimg = $_POST['omimg'];

  $sql = 'UPDATE medicine SET mname="'.$mname.'", mimg="'.$mimg.'", mwork="'.$mwork.'", mdiscription="'.$mdiscription.'" WHERE id ="'.$id.'"';
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if (!$result) {
    echo "<br>Fail";
  }
  else {
    unlink('medicine_img/'.$omimg);
    move_uploaded_file($_FILES['mimg']['tmp_name'], "medicine_img/".$_FILES['mimg']['name']);

    $_SESSION['medit_ok'] = "Edit Success!";
    header("Location:admin_medicine.php");
  }
}
 ?>

<?php
include "connection.php";
session_start();

$id = $_GET['id'];

$sql = 'SELECT * FROM medicine WHERE id="'.$id.'"';
$run = mysqli_query($conn, $sql);

if (mysqli_num_rows($run) > 0) {
  foreach ($run as $row) {
    $mimg = $row['mimg'];
  }

unlink('medicine_img/'.$mimg);
}

$sql = 'DELETE FROM medicine WHERE id="'.$id.'"';
$result = mysqli_query($conn, $sql);

if ($result) {

  $_SESSION['mdelete'] = 'Delete Successfully';
  header("Location:admin_medicine.php");
}
 ?>

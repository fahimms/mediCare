<?php
include "connection.php";
session_start();

$id = $_GET['id'];

$sql = 'SELECT * FROM user WHERE id="'.$id.'"';
$run = mysqli_query($conn, $sql);

if (mysqli_num_rows($run) > 0) {
  foreach ($run as $row) {
    $uimg = $row['uimg'];
  }

unlink('user_img/'.$uimg);
}

$sql = 'DELETE FROM user WHERE id="'.$id.'"';
$result = mysqli_query($conn, $sql);

if ($result) {

  $_SESSION['udelete'] = 'Delete Successfully';
  header("Location:admin_user.php");
}
 ?>

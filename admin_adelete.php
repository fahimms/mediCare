<?php
include "connection.php";
session_start();

$id = $_GET['id'];

$sql = 'DELETE FROM admin WHERE id="'.$id.'"';
$result = mysqli_query($conn, $sql);

if ($result) {

  $_SESSION['adelete'] = 'Delete Successfully';
  header("Location:head_admin_profile.php");
}
 ?>

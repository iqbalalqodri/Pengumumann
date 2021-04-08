<?php 
include "connect.php";

if (isset($_GET['id'])) {
	$id= $_GET['id'];
}

$sql = "DELETE FROM as_users Where id = '$id' ";
$s   = mysqli_query ($connect,$sql);

$sql1 = "DELETE FROM as_raport Where id_users = '$id' ";
$s1   = mysqli_query ($connect,$sql1);

if (mysqli_affected_rows($conn)) {
  	
  	header("location:users_d.php");
  } else{
  	header("location:users_d.php");
  }


 ?>
 <?php 
$akses = '<script type="text/javascript"> window.location ="home.php";</script>';
if ($_SESSION['akses'] =='siswa') {
      echo $akses;
}
 ?>
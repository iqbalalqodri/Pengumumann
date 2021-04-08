<?php 
include "connect.php";

if (isset($_GET['id'])) {
	$id= $_GET['id'];
}

$sql = "DELETE FROM as_pengumuman Where id = '$id' ";
$s   = mysqli_query ($connect,$sql);



if (mysqli_affected_rows($conn)) {
  	
  	header("location:Pengumuman_d.php");
  } else{
  	header("location:Pengumuman_d.php");
  }


 ?>
 <?php 
$akses = '<script type="text/javascript"> window.location ="home.php";</script>';
if ($_SESSION['akses'] =='siswa') {
      echo $akses;
}
 ?>
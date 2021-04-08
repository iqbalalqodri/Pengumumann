<?php 

date_default_timezone_set('Asia/Jakarta');
session_start();
if (!isset($_SESSION['akses'])){
  header("location:../index.php");
}

$akses = '<script type="text/javascript"> window.location ="../home.php";</script>';
if ($_SESSION['akses'] =='siswa') {
      echo $akses;
}
if ($_SESSION['akses'] =='admin') {
      echo $akses;
}


 ?>
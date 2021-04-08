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

 ?>
<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "pengumuman_kelulusan"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL
?>

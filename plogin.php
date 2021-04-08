<?php
include "connect.php";
session_start();
error_reporting();

if (!isset($_SESSION['userid'])){
} else{

  header("location:home.php");
  }

if (!isset($_SESSION['user_id'])){
} else{

  header("location:home.php");
  }


$error = false;

if (isset($_POST["login"])) {
$username = mysqli_escape_string($connect,$_POST["username"]);
$password = mysqli_escape_string($connect,$_POST["password"]);


$login= mysqli_query($connect,"select * from as_users where username = '$username ' AND password ='$password '");
$hasil= mysqli_num_rows($login);



if($hasil>0){
  // $error = false; // tidak error
  foreach ($login as $key => $value) {
    $level= $value["level"];
    $id_users= $value["id"];
    if($level=='admin') {
      //maka dia admin
      echo "<script type='text/javascript'>alert('Selamat Datang !!');
                                    location='home.php';
                          </script>";
     }
     //maka dia siswa
     else if($level=='siswa'){
      echo "<script type='text/javascript'>alert('Selamat Datang !!');
                                    location='home.php';
                          </script>";
    }

  $_SESSION["akses"] = $level;
  $_SESSION["id_users"] = $id_users;
  $_SESSION["userid"] = $value["id"];
  // $_SESSION["id_wali_kelas"] = $value["id_wali_kelas"]; // 5
  }
	// echo "berhasil";

}else{
  $error = true;
	header("location:index.php?pesan=$error");
}
}


 ?>
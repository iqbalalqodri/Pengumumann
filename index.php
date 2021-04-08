<?php  include 'connect.php' ;error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengumuman kelulusan</title>
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background:#012345">

    <div class="card">
        <div class="card-body" style="background:#012345">
            <center>
                <img src="img/logo.png" alt="" style="witdh:100px; height:100px;">
                <p>
                    <h2 class="text-info">Kelulusan Peserta Didik SMK Negeri 1 Buay Bahuga</h2>
                </p>
                <br>
                <h4 style="color:#ffff">Cari Berdasarkan No Peserta Pada Kartu Peserta (Bukan Kartu Login)</h4>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="cari" class="form-control" placeholder="NISN/NOMOR PESERTA"
                                required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                        <!-- <marquee>aku</marquee> -->
                            <button name="submit" class="form-control btn btn-info ">Cari NISN/Nomor Peserta</button>
                        </div>
                    </div>

                </form>
            </center>
        </div>
        <br>

        <?php
            if (isset($_POST['submit'])) {
                $cari = mysqli_escape_string($connect, $_POST['cari']);
                
                $query = mysqli_query($connect,"SELECT * FROM `as_pengumuman` WHERE nisn =$cari or nomor_peserta ='$cari' ");
                $test  = mysqli_fetch_assoc($query);
                if ($test > 0) { 
        ?>
        <?php if ($test['keterangan']=="Lulus") { ?>
        <div class="card">
            <div class="card-body" style="background:green">
                <center>
                    <h2 style="color:white">Selamat <?= $test['nama'] ?> anda dinyatakan <?= $test['keterangan'] ?>
                    </h2>
                </center>
            </div>
            <br>
            <div class="col-sm-12">
                <center><a class="btn btn-success" href="javascript:void(0);"
                        onclick="window.open('SKL.php?nisn=<?= $test['nisn'] ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')">Cetak
                        Surat Keterangan Lulus</a>

            </div>
            </center>
            <br>
        </div>
        <?php }else{ ?>
        <div class="card">
            <div class="card-body" style="background:red">
                <center>
                    <h2 style="color:white">Mohon Maaf <?= $test['nama'] ?> anda dinyatakan <?= $test['keterangan'] ?>
                    </h2>
                </center>
            </div>
        </div>

        <?php } ?>

        <?php   
                }else{
                    echo "<center>Mohon Maaf Data Tidak Ada</center>";
                }

                
            }else{
                echo "";
            }
        
        
        ?>










        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
    </div>





</body>

</html>
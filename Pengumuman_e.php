 <?php include 'connect.php';

date_default_timezone_set('Asia/Jakarta');
session_start();
if (!isset($_SESSION['akses'])){
  header("location:index.php");
}

 ?>

 <?php 
$akses = '<script type="text/javascript"> window.location ="home.php";</script>';
if ($_SESSION['akses'] =='siswa') {
      echo $akses;
}
 ?>
 <?php 
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
        }

        $sql = "select * from as_pengumuman where id = '$id'";
        $Sq = mysqli_query ($connect,$sql);
        $data = mysqli_fetch_assoc($Sq);
        // $jurusan = $data['id_jurusan'];
 ?>

 <?php 
        if (isset($_POST['submit'])) {

            $nama = $_POST['nama'];
            $kj = $_POST['kj'];
            $nisn = $_POST['nisn'];
            $np = $_POST['np'];
            $keterangan = $_POST['keterangan'];

            $sql1=mysqli_query($connect,"UPDATE `as_pengumuman` SET 
                `nisn` = '$nisn',
                `nomor_peserta` = '$np',
                `nama` = '$nama',  
                `kelas_jurusan` = '$kj',  
                `keterangan` = '$keterangan'
                WHERE `id` = '$id'");

                if (mysqli_query($connect,$sql)) {
                    echo "<script type='text/javascript'>alert('Data Berhasil Di Edit Ke Database!!');
                                    location='Pengumuman_d.php';
                          </script>";
                    

                }else{
                    echo "gagal";
                }
            }

     ?>

 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>SMK N 1 LAHAT | Edit Users</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome -->
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

 <body class="hold-transition sidebar-mini">
   <div class="wrapper">
     <!-- Navbar -->
     <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
       </ul>

       <!-- SEARCH FORM -->
       <form class="form-inline ml-3">
         <div class="input-group input-group-sm">
           <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
           <div class="input-group-append">
             <button class="btn btn-navbar" type="submit">
               <i class="fas fa-search"></i>
             </button>
           </div>
         </div>
       </form>


     </nav>
     <!-- /.navbar -->

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include 'logo_sidebar.php'; ?>
       <!-- Sidebar Menu -->
       <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
             <a href="home.php" class="nav-link ">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>
           <li class="nav-item has-treeview">
             <a href="#" class="nav-link ">
               <i class="nav-icon fas fa-users"></i>
               <p>
                 Users
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="users_d.php" class="nav-link ">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Data Users</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="users_t.php" class="nav-link ">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Tambah Users</p>
                 </a>
               </li>
             </ul>
           </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                List Pengumuman
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Pengumuman_d.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Pengumuman_t.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pengumuman</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-header">LABELS</li>
           <li class="nav-item">
             <a href="logout.php" class="nav-link">
               <i class="nav-icon far fa-circle text-danger"></i>
               <p class="text">Logout</p>
             </a>
           </li>
         </ul>
       </nav>
       <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
   </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1></h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Pengumuman Data</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">
         <div class="row">
           <div class="col-12">
             <div class="card">
               <div class="card-header">
                 <h3 class="card-title">Edit Pengumuman</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                 <div class="col-sm-12">
                   <div class="col-sm-6">
                     <form action="" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <label class="label-control" for="">Nama</label>
                         <input class="form-control" name="nama" type="text " placeholder="Masukan Nama" required="" value="<?= $data['nama']  ?>">
                       </div>
                       <div class="form-group">
                         <label class="label-control" for="">Kelas/Jurusan</label>
                         <input class="form-control" name="kj" type="text " placeholder="Masukan Kelas/Jurusan"
                           required="" value="<?= $data['kelas_jurusan']  ?>">
                       </div>

                       <div class="form-group">
                         <label class="label-control" for="">NISN</label>
                         <input class="form-control" name="nisn" type="text " placeholder="Masukan nisn" required="" value="<?= $data['nisn']  ?>">
                       </div>

                       <div class="form-group">
                         <label class="label-control" for="">NOMOR PESERTA</label>
                         <input class="form-control" name="np" type="text " placeholder="Masukan nomor peserta"
                           required="" value="<?= $data['nomor_peserta']  ?>">
                       </div>

                       <div class="form-group">
                         <label class="label-control" for="">Keterangan</label>
                         <?php $selected = 'selected'  ?>
                         <select class="form-control" name="keterangan">
                           <option value="">====Pilih Keterangan=====</option>
                           <option <?php if ($data==='Lulus') { echo $selected; } ?>  value="Lulus">Lulus</option>
                           <option <?php if ($data==='Tidak Lulus') { echo $selected; } ?> value="Tidak Lulus">Tidak Lulus</option>
                         </select>
                       </div>
                       <div class="form-group">
                         <label class="label-control" for=""></label>
                         <button class="btn btn-success" name="submit">Save</button>
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->
       </div>
       <!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   <?php include 'footer.php'; ?>

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->

   <!-- jQuery -->
   <script src="assets/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- DataTables -->
   <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <!-- AdminLTE App -->
   <script src="assets/dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="assets/dist/js/demo.js"></script>
   <!-- page script -->
   <script>
     $(function () {
       $("#example1").DataTable({
         "responsive": true,
         "autoWidth": false,
       });
       $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
         "responsive": true,
       });
     });
   </script>
 </body>

 </html>
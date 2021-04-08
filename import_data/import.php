<?php 
include "koneksi.php";
date_default_timezone_set('Asia/Jakarta');
if (!isset($_SESSION['akses'])){
  header("location:../index.php");
}

 ?>
<?php

// Load file koneksi.php

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';

	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$nama = $row['A']; // Ambil data 
		$user = $row['B']; // Ambil data 
		$pass = $row['C']; // Ambil data 


		// Cek jika semua data tidak diisi
		if($nama == "" || $user == "" || $pass == "")
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Buat query Insert
			$query = "INSERT INTO `as_users` (`nama`,`username`,`password`,`level`) VALUES ('$nama','$user','$pass','siswa');";

			// Eksekusi $query
			mysqli_query($connect, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}
?><script type="text/javascript">alert("sukses simpan data "); window.location ='../users_d.php'; </script>
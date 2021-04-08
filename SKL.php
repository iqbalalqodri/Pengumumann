<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

include 'connect.php';
if (isset($_GET['nisn'])) {
    $nisn = $_GET['nisn'];
}

$query = mysqli_query($connect,"SELECT * FROM `as_pengumuman` WHERE nisn =$nisn");
$test  = mysqli_fetch_assoc($query);

?>

<table>
<tr>
<td>Nama Siswa</td>
<td>:</td>
<td><?= $test['nama'] ?></td>
</tr>
<br><br>
<tr>
<td>NISN/NOMOR PESERTA</td>
<td>:</td>
<td><?= $test['nisn'] ?> / <?= $test['nomor_peserta'] ?> </td>
</tr>
<br><br>
<tr>
<td>Kelas Jurusan </td>
<td>:</td>
<td><?= $test['kelas_jurusan'] ?></td>
</tr>

</table>

<p>Menyatakan Siswa/i Tersebut Telah Dinyatakan

<u>LULUS UJIAN AKHIR SEKOLAH dan UKK (ujian Kompetensi Keahlian)</u> 

Di SMK Negeri 1 Buay Bahuga
 </p> 



    
</body>
</html>
<?php
$nama =$test['nama'];
$filename="$nama".$kode.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>
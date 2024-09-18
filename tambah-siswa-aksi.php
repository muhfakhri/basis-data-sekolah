<?php include "connect.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$tanggal = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$kelas = $_POST['id-kelas'];

mysqli_query($koneksi, "INSERT INTO siswa values('$nisn','$nama','$tanggal','$alamat','$gender','$kelas')");
header('location: Main.php');
?>
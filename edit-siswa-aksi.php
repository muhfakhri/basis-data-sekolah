<?php include 'connect.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$tanggal = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$kelas = $_POST['id-kelas'];

mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama', tanggal_lahir='$tanggal', alamat='$alamat', gender='$gender', id-kelas='$kelas' where nisn='$nisn'");

header("location: Main.php");
?>
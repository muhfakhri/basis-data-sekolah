<?php include '../connect.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$tanggal = $_POST['ttl'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$kelas = $_POST['id_kelas'];

mysqli_query($koneksi,"UPDATE siswa SET nama_siswa='$nama', ttl='$tanggal', alamat='$alamat', gender='$gender', id_kelas='$kelas' where nisn='$nisn'");

header("location: siswa.php"); //weewwee
?>
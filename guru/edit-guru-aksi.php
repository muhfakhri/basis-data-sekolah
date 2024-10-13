<?php include '../connect.php';

$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$ttl = $_POST['ttl'];
$Telp = $_POST['telp'];

mysqli_query($koneksi,"UPDATE guru SET nama_guru='$nama_guru', ttl='$ttl', alamat='$alamat', gender='$gender', telp='$Telp' where id_guru='$id_guru'");
header("location: guru.php");
?>



<?php include '../connect.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama_siswa'];
$tanggal = $_POST['ttl'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$kelas = $_POST['id_kelas'];

$tambahdata = mysqli_query($koneksi,"INSERT INTO siswa VALUES('$nisn','$nama','$tanggal','$alamat','$gender','$kelas')");



header("location: siswa.php");


//weewwee
?>
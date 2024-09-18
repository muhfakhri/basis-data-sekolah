<?php include 'connect.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn='$id'");

 header('location: Main.php');
?>
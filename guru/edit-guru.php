<?php 
include '../connect.php';
$id=$_GET['id'];

$data=mysqli_query($koneksi, "SELECT * FROM guru WHERE id_guru = '$id'");
while($isi=mysqli_fetch_array($data)){
?>
<html>
<head>
<title>Home | admin</title>
<link rel="stylesheet" type="text/css" href="../asset/style.css?v2">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css?v2">
</head>
<nav>
<ul class="kiri">
<li><a href="">ADMIN</a></li>
</ul>
<ul class="kanan">
		<li><a href="">Hello Fakhri</a></li>
		<div style="clear:both"></div>
	</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
</nav>
<div class="sidebar">

<ul>
            <li><a href="../index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
			<li><a href="../siswa/siswa.php"><i class="icon-group"></i>Data Siswa</a></li>
            <li><a href="../guru/guru.php"><i class="icon-user"></i>Data Guru</a></li>
            <li><a href="../kelas/kelas.php"><i class="icon-sitemap"></i>Data Kelas</a></li>
            <li><a href="../mapel/mapel.php"><i class="icon-book"></i>Data Mapel</a></li>
		</ul>

</div>
    <div class="main">
	<div class="isimain">
		<span class="span">Form Input Data Guru</span>


        <form method="post" action="edit-siswa-aksi.php">
        <table>

<form action="edit-guru-aksi.php" method="post">
    <table>
        <tr>
            <td>Id Guru</td>
            <td><input type="number" name="id_guru" value="<?php echo $isi['id_guru']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Guru</td>
            <td><input type="text" name="nama_guru" value="<?php echo $isi['nama_guru']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $isi['alamat']; ?>"></td>
        </tr>
        <tr>
        <td>Gender</td>
        <td><label for="gender"></label>
        <select id="gender" name="gender">
                <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td><input type="date" name="ttl" value="<?php echo $isi['ttl']; ?>"></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td><input type="number" name="telp" value="<?php echo $isi['telp']; ?>"></td>
        </tr>
            <td colspan="2">
                <input type="submit" value="SUMBIT">
            </td>
        </tr>
    </table>
<?php
}
?>
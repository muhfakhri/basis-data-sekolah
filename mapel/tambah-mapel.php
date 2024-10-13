<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
	<link rel="stylesheet" type="text/css" href="../asset/style.css?v2">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
</head>
<body>
<nav>
	<ul class="kiri">
		<li><a href="">COntrol Admin</a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Hello Fakhri</a></li>
		<div style="clear:both"></div>
	</ul>
</nav>
<div class="sidebar">
		<ul>
			<li><a href="index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
			<li><a href="../siswa/siswa.php"><i class="icon-group"></i>Data Siswa</a></li>
      <li><a href="../guru/guru.php"><i class="icon-user"></i>Data Guru</a></li>
      <li><a href="../kelas/kelas.php"><i class="icon-sitemap"></i>Data Kelas</a></li>
      <li><a href="../mapel/mapel.php"><i class="icon-book"></i>Data Mapel</a></li>
		</ul>
	</div>
    <div class="main">
	<div class="isimain">
		<span class="span">Form Input Data Mapel</span>


<form method="post" action="tambah-mapel-aksi.php">

<table><center>
 <tr>
    <td>Id_Mapel</td>
    <td><input type="number" name="id_mapel"></td>
</tr>
<tr>
    <td>Nama_Mapel</td>
    <td><input type="text" name="nama_mapel"></td>
</tr>
<tr>
    <td>Id_Guru</td>
    <td><input type="number" name="id_guru"></td>
</tr>
    <td></td>
    <td><input type="submit" name="submit"></td>
</tr>
</table>

</form>
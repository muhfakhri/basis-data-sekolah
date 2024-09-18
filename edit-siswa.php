<?php 
include 'connect.php';
$id=$_GET['id'];

$data=mysqli_query( $koneksi, "select * from siswa where nisn= '$id'");
while($isi=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-siswa-aksi.php">
<table>

<tr>
    <td>Nama</td>
    <td>
        <input type="hidden" name="nisn" value="<?php echo $isi['nisn']; ?>">
        <input type="text" name="nama" value="<?php echo $isi['nama_siswa']; ?>">
    </td>
</tr>
<tr>
    <td>Tanggal-Lahir</td>
    <td><input type="date" name="tanggal_lahir" value="<?php $isi['tanggal_lahir']; ?>"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat" value="<?php $isi['alamat']; ?>"></td>
</tr>
<tr>
    <td>Gender</td>
    <td><input type="text" name="gender" value="<?php $isi['gender']; ?>"></td>
</tr>
<tr>
    <td>Id-Kelas</td>
    <td><input type="number" name="id_kelas" value="<?php $isi['id_kelas']; ?>"></td>
</tr>

</table>
</form>
<?php
}

?>
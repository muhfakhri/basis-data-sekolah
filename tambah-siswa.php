<form method="post" action="tambah-siswa-aksi.php">

<table><center>
 <tr>
    <td>NISN</td>
    <td><input type="number" name="nisn"></td>
</tr>
<tr>
    <td>Nama_Siswa</td>
    <td><input type="text" name="nama_siswa"></td>
</tr>
<tr>
    <td>Tanggal-Lahir</td>
    <td><input type="date" name="tanggal_lahir"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat"></td>
</tr>
<tr>
    <td>Gender</td>
    <td><label for="gender">Gender:</label>
<select id="gender" name="gender">
  <option value="F">Female</option>
  <option value="M">Male</option>
</select></td>
</tr>
<tr>
    <td>Id_Kelas</td>
    <td><input type="number" name="id-kelas"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit"></td>
</tr>
</table>

</form>
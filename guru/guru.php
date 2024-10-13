
<?php 
include '../connect.php';

// Get the search query if available
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Set default limit (number of rows per page), 10 if not specified
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 5;

// Get the current page number from the URL, default is 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting row for the current page
$start = ($page - 1) * $limit;

// Modify the query based on the search input
if ($search != '') {
    $query = "SELECT * FROM guru WHERE nama_guru LIKE '%$search%' LIMIT $start, $limit";
    $count_query = "SELECT COUNT(id_guru) AS total FROM guru WHERE nama_guru LIKE '%$search%'";
} else {
    // Original query if no search is performed
    $query = "SELECT * FROM guru LIMIT $start, $limit";
    $count_query = "SELECT COUNT(id_guru) AS total FROM guru";
}

// Execute the query to count total rows
$result = mysqli_query($koneksi, $count_query);
$row = mysqli_fetch_array($result);
$total_records = $row['total'];

// Calculate total pages based on total records and limit per page
$total_pages = ceil($total_records / $limit);

// Fetch the data for the current page
$DataBase = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
	<link rel="stylesheet" type="text/css" href="../asset/style.css?v2">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css?v2">
</head>
<body>
<nav>
	<ul class="kiri">
		<li><a href="">ADMIN</a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Hello Fakhri</a></li>
		<div style="clear:both"></div>
	</ul>
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
        <span class="span">DATABASE GURU</span>
        
<form action="guru.php" method="GET">
    <label for="entries">Show Entries:</label>
    <select name="limit" id="entries" onchange="this.form.submit()">
        <option value="5" <?= isset($_GET['limit']) && $_GET['limit'] == 5 ? 'selected' : '' ?>>5</option>
        <option value="10" <?= isset($_GET['limit']) && $_GET['limit'] == 10 ? 'selected' : '' ?>>10</option>
        <option value="25" <?= isset($_GET['limit']) && $_GET['limit'] == 25 ? 'selected' : '' ?>>25</option>
        <option value="50" <?= isset($_GET['limit']) && $_GET['limit'] == 50 ? 'selected' : '' ?>>50</option>
        <option value="100" <?= isset($_GET['limit']) && $_GET['limit'] == 100 ? 'selected' : '' ?>>100</option>
    </select>
</form>

            
            <!-- Search Form -->
            <input type="text" name="search" placeholder="Cari Nama Guru" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
            <input type="submit" value="Cari">
    

      
        <a href="tambah-guru.php"><input type="submit"  value="✙ TAMBAH"></a>

        <table border="1">


<tr>
    <td>Id-Guru</td>
    <td>Nama-Guru</td>
    <td>Alamat</td>
    <td>Gender</td>
    <td>Tanggal-Lahir</td>
    <td>Telp</td>
    <td>Action</td>
</tr>



<?php

$DataBase = mysqli_query($koneksi,"select * from guru");
while ($show = mysqli_fetch_array($DataBase)){
?>
<tr>

   <td><?php echo $show ['id_guru'];?></td>
   <td><?php echo $show ['nama_guru'];?></td>
   <td><?php echo $show ['alamat'];?></td>
   <td><?php echo $show ['gender'];?></td>
   <td><?php echo $show ['ttl'];?></td>
   <td><?php echo $show ['telp'];?></td>

   <td>                                   
    <a href="delete-guru.php?id=<?php echo $show['id_guru']; ?>" class="icon-trash"></a>
    <a href="edit-guru.php?id=<?php echo $show['id_guru']; ?>" class="icon-edit"></a>
   </td>

</tr>
<?php
}
?>
</table>
<div class="pagination">
            <?php if ($page > 1): ?>
                <a href="guru.php?page=<?= $page - 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="guru.php?page=<?= $i ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" class="<?= ($page == $i) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="guru.php?page=<?= $page + 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</div>




</body>
</html>


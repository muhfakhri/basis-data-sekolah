<?php 
include '../connect.php';


$search = isset($_GET['search']) ? $_GET['search'] : '';


$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 5;


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$start = ($page - 1) * $limit;


if ($search != '') {
    $query = "SELECT * FROM mapel WHERE nama_mapel LIKE '%$search%' LIMIT $start, $limit";
    $count_query = "SELECT COUNT(id_mapel) AS total FROM mapel WHERE nama_mapel LIKE '%$search%'";
} else {
    
    $query = "SELECT * FROM mapel LIMIT $start, $limit";
    $count_query = "SELECT COUNT(id_mapel) AS total FROM mapel";
}


$result = mysqli_query($koneksi, $count_query);
$row = mysqli_fetch_array($result);
$total_records = $row['total'];


$total_pages = ceil($total_records / $limit);


$DataBase = mysqli_query($koneksi, $query);
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
        <span class="span">DATABASE MAPEL</span>

        <form action="mapel.php" method="GET" class="form-container">
    <div class="form-group">
        <label for="entries">Show Entries:</label>
        <select name="limit" id="entries" onchange="this.form.submit()">
            <option value="5" <?= isset($_GET['limit']) && $_GET['limit'] == 5 ? 'selected' : '' ?>>5</option>
            <option value="10" <?= isset($_GET['limit']) && $_GET['limit'] == 10 ? 'selected' : '' ?>>10</option>
            <option value="25" <?= isset($_GET['limit']) && $_GET['limit'] == 25 ? 'selected' : '' ?>>25</option>
            <option value="50" <?= isset($_GET['limit']) && $_GET['limit'] == 50 ? 'selected' : '' ?>>50</option>
            <option value="100" <?= isset($_GET['limit']) && $_GET['limit'] == 100 ? 'selected' : '' ?>>100</option>
        </select>
    </div>

    <!-- Search input positioned below the dropdown -->
    <div class="form-group">
        <input type="text" name="search" placeholder="Cari Nama Mapel" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    </div>

    <button type="submit">
    <i class="icon-search"></i> Cari
</button>

</form>
      
        <a href="tambah-mapel.php"><button type="submit">
    <i class="icon-plus"></i> TAMBAH</button></a>

        <table border="1">

<tr>
    <td>Id-Mapel</td>
    <td>Nama-Mapel</td>
    <td>Id-Guru</td>
    <td>Actions</td>
    
</tr>



<?php while ($show = mysqli_fetch_array($DataBase)) { ?>
<tr>

   <td><?php echo $show ['id_mapel'];?></td>
   <td><?php echo $show ['nama_mapel'];?></td>
   <td><?php echo $show ['id_guru'];?></td>

   <td>                                   
    <a href="delete-mapel.php?id=<?php echo $show['id_mapel']; ?>"class="icon-trash"></a>
    <a href="edit-mapel.php?id=<?php echo $show['id_mapel']; ?>"class="icon-edit"></a>
   </td>
 

</tr>
<?php
}
?>
</table>

<div class="pagination">
            <?php if ($page > 1): ?>
                <a href="mapel.php?page=<?= $page - 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="mapel.php?page=<?= $i ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" class="<?= ($page == $i) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="mapel.php?page=<?= $page + 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</div>



</body>
</html>


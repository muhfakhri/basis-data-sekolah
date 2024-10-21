<?php include 'connect.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css?v2">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
			<li><a href="../basis-data-sekolah/siswa/siswa.php"><i class="icon-group"></i>Data Siswa</a></li>
      <li><a href="../basis-data-sekolah/guru/guru.php"><i class="icon-user"></i>Data Guru</a></li>
      <li><a href="../basis-data-sekolah/kelas/kelas.php"><i class="icon-sitemap"></i>Data Kelas</a></li>
      <li><a href="../basis-data-sekolah/mapel/mapel.php"><i class="icon-book"></i>Data Mapel</a></li>
		</ul>
	</div>
<div class="main">
	<div class="isimain">
		<span class="span"> SIMPLE APLIKASI SISTEM INFORMASI SEKOLAH</span>
		
	


  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span11">
          <a href="">
            <i class="icon-group"></i> <strong>
              <?php $query_soswa=mysqli_query($koneksi,"SELECT count(nisn) FROM siswa");
              $data_soswa=mysqli_fetch_array($query_soswa);
              echo $data_soswa[0];
               ?>
            </strong> <small>Total Siswa</small>
          </a>
        </li>
        <li class="bg_lg span11">
          <a href="">
            <i class="icon-sitemap"></i> <strong>
              <?php $query_kolas=mysqli_query($koneksi,"SELECT count(id_kelas) FROM kelas");
              $data_kolas=mysqli_fetch_array($query_kolas);
              echo $data_kolas[0];
               ?>
            </strong> <small>Total Kelas</small>
          </a>
        </li>
        <li class="bg_ly span11">
          <a href="">
            <i class="icon-user"></i> <strong>
              <?php $query_goru=mysqli_query($koneksi,"SELECT count(id_guru) FROM guru");
              $data_goru=mysqli_fetch_array($query_goru);
              echo $data_goru[0];
               ?>
            </strong> <small>Total Guru</small>
          </a>
        </li>
        <li class="bg_ls span11">
          <a href="">
            <i class="icon-book"></i> <strong>
              <?php $query_goru=mysqli_query($koneksi,"SELECT count(id_mapel) FROM mapel");
              $data_goru=mysqli_fetch_array($query_goru);
              echo $data_goru[0];
               ?>
            </strong> <small>Total Mapel</small>
          </a>
        </li>
      </ul>
    </div>
<!--End-Action boxes-->
    <hr/>
   <!-- Designed with Figma -->
    <center>
<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="study">
<rect width="64" height="64"/>
<g id="smoke">
<path id="smoke-2" d="M9 21L9.55279 19.8944C9.83431 19.3314 9.83431 18.6686 9.55279 18.1056L9 17L8.44721 15.8944C8.16569 15.3314 8.16569 14.6686 8.44721 14.1056L9 13" stroke="#797270"/>
<path id="smoke-1" d="M6.5 22L7.05279 20.8944C7.33431 20.3314 7.33431 19.6686 7.05279 19.1056L6.5 18L5.94721 16.8944C5.66569 16.3314 5.66569 15.6686 5.94721 15.1056L6.5 14" stroke="#797270"/>
</g>
<g id="laptop">
<rect id="laptop-base" x="17" y="28" width="20" height="3" fill="#F3F3F3" stroke="#453F3C" stroke-width="2"/>
<rect id="laptop-screen" x="18" y="17" width="18" height="11" fill="#5A524E" stroke="#453F3C" stroke-width="2"/>
<rect id="line-1" x="20" y="19" width="14" height="1" fill="#F78764"/>
<rect id="line-2" x="20" y="21" width="14" height="1" fill="#F9AB82"/>
<rect id="line-3" x="20" y="23" width="14" height="1" fill="#F78764"/>
<rect id="line-4" x="20" y="25" width="14" height="1" fill="#F9AB82"/>
</g>
<g id="cup">
<rect id="Rectangle 978" x="5" y="24" width="5" height="7" fill="#CCC4C4" stroke="#453F3C" stroke-width="2"/>
<path id="Ellipse 416" d="M11 28C12.1046 28 13 27.1046 13 26C13 24.8954 12.1046 24 11 24" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 996" x="6" y="25" width="3" height="1" fill="#D6D2D1"/>
</g>
<g id="books">
<rect id="Rectangle 984" x="58" y="27" width="4" height="14" transform="rotate(90 58 27)" fill="#B16B4F" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 985" x="56" y="23" width="4" height="14" transform="rotate(90 56 23)" fill="#797270" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 986" x="60" y="19" width="4" height="14" transform="rotate(90 60 19)" fill="#F78764" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 993" x="47" y="20" width="12" height="1" fill="#F9AB82"/>
<rect id="Rectangle 994" x="43" y="24" width="12" height="1" fill="#54504E"/>
<rect id="Rectangle 995" x="45" y="28" width="12" height="1" fill="#804D39"/>
</g>
<g id="desk">
<rect id="Rectangle 973" x="4" y="31" width="56" height="5" fill="#797270" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 987" x="10" y="36" width="30" height="6" fill="#797270" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 975" x="6" y="36" width="4" height="24" fill="#797270" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 974" x="40" y="36" width="18" height="24" fill="#797270" stroke="#453F3C" stroke-width="2"/>
<line id="Line 129" x1="40" y1="48" x2="58" y2="48" stroke="#453F3C" stroke-width="2"/>
<line id="Line 130" x1="22" y1="39" x2="28" y2="39" stroke="#453F3C" stroke-width="2"/>
<line id="Line 142" x1="46" y1="42" x2="52" y2="42" stroke="#453F3C" stroke-width="2"/>
<line id="Line 131" x1="46" y1="54" x2="52" y2="54" stroke="#453F3C" stroke-width="2"/>
<rect id="Rectangle 988" x="11" y="37" width="28" height="1" fill="#54504E"/>
<rect id="Rectangle 992" x="5" y="32" width="54" height="1" fill="#9E9492"/>
<rect id="Rectangle 989" x="7" y="37" width="2" height="1" fill="#54504E"/>
<rect id="Rectangle 990" x="41" y="37" width="16" height="1" fill="#54504E"/>
<rect id="Rectangle 991" x="41" y="49" width="16" height="1" fill="#54504E"/>
<line id="Line 143" y1="60" x2="64" y2="60" stroke="#453F3C" stroke-width="2"/>
</g>
</g>
</svg>
<h1> APLIKASI SITEM INFORMASI SEKOLAH</h1>
</center>
    </div>
  </div>
</div>



  </div>
</div>
</div>




</body>
</html>
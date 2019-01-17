<?php
ob_start();
session_start();
if(isset($_SESSION["login"]) ){
$tampil_login = "display:none";
$tampil_logout="";
$tampil_wisata_pop="display:none";
$tampil_daftar_wisata="display:none";
$kontak="display:none";
$data_admin="";
$data_wisata="";


}else{
$tampil_login = "";
$tampil_logout= "display:none";
$tampil_wisata_pop="";
$tampil_daftar_wisata="";
$kontak="";
$data_admin="display:none";
$data_wisata="display:none";

}
?>
<html lang="id" id="home">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="icon" href="1.png" type="image/PNG" size="20x20">
	<link rel="stylesheet" href="bootstraps/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="manifest" href="manifest.json">
	<!-- jQuery library -->
	<script src="bootstraps/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="bootstraps/bootstrap.min.js"></script>
	<TITLE>Wisata Yogyakarta</TITLE>
	
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<a class="navbar-brand" href="index.php">Beranda</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#populer1" class="page-scroll" style="<?php echo $tampil_wisata_pop ?>">Wisata Populer <span class="sr-only">(current)</span></a></li>
					<li><a href="#populer" class="page-scroll" style="<?php echo $tampil_wisata_pop ?>">Daftar Wisata<span class="sr-only">(current)</span></a></li>
					<li><a href="#kontak" class="page-scroll" style="<?php echo $kontak ?>">Kontak</a></li>
					<li><a href="data_wisata.php"" style="<?php echo $data_wisata ?>">Data Wisata <span class="sr-only">(current)</span></a></li>
					<li><a href="data_admin.php"" style="<?php echo $data_admin ?>">Data Admin <span class="sr-only">(current)</span></a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
				​  <a href="form_login.php" class="btn btn-primary navbar-btn" style="<?php echo $tampil_login ?>">Admin</a>	
					 <a href="proses_logout.php" class="btn btn-primary navbar-btn" style="<?php echo $tampil_logout ?>">Logout</a>				
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
 </head>
 </html>
 <script src="js/script.js"></script>
 <script src="bootstraps/jquery.min.js"></script>
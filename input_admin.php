<?php
ob_start(); 
include_once('template_atas.php'); 
require 'function.php';
?>
<html>
<head>
	<title>Input Admin</title>
</head>
<body>
<div class="container-fluid">
	<section class="tambah" id="tambah">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Tambah Admin</h2>
				<hr>
			</div>
		</div>
	
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
			<form action="proses_tambah_admin.php" method="post">
  				<div class="form-group">
    				<label for="exampleInputEmail1">Username</label>
    				<input type="Nama" class="form-control" name = "username" id="username" placeholder="Masukan Username">
    			</div>
    			<div class="form-group">
    				<label for="exampleInputEmail1">Password</label>
    				<input type="Password" class="form-control" name="password" id="password" placeholder="Masukan Password">
    			</div>
    			<div class="form-group">
    				<label>Status</label>
    				<select class="form-control" name="status">
    					<option>Aktif</option>
    					<option>Tidak Aktif</option>
    				</select>
    			</div>
    			<button type="submit" class="btn btn-primary" name="tambah1">Tambah</button>
    		</form>
    	</div>
    </div>
</section>
</div>
</body>
</html>

<?php include_once('template_bawah.php'); ?>
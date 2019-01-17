<?php
ob_start(); 
include_once('template_atas.php'); 
require 'function.php';
include_once('koneksi.php');
$idpengguna= $_GET['idpengguna'];
    $sql = "SELECT * FROM login
            WHERE idpengguna=$idpengguna
            ORDER BY idpengguna DESC";
    $query = mysqli_query($kon, $sql);
  
    $row= mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Admin</title>
</head>
<body>
	<section class="tambah" id="tambah">
    <div class="container">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Edit Admin</h2>
				<hr>
			</div>
		</div>
	
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
			<form action="proses_edit_admin.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="idpengguna" value="<?php echo $row['idpengguna'];?>">
  				<div class="form-group">
    				<label for="exampleInputEmail1">Username</label>
    				<input type="Nama" class="form-control" name = "username" id="username" placeholder="Masukan Username" value="<?php echo $row['user'];?>">
    			</div>
    			<div class="form-group">
    				<label for="exampleInputEmail1">Password</label>
    				<input type="Password" class="form-control" name="password" id="password" placeholder="Masukan Password" value="<?php echo ($row['passoword']);?>">
    			</div>
    			<div class="form-group">
    				<label>Status</label>
    				<select class="form-control" name="status" value="<?php echo $row['status'];?>">
    					<option>Aktif</option>
    					<option>Tidak Aktif</option>
    				</select>
    			</div>
    			<button type="submit" class="btn btn-primary" name="tambah1">Edit</button>
    		</div>
            </form>
    	</div>
    </div>
</section>
</body>
</html>

<?php include_once('template_bawah.php'); ?>
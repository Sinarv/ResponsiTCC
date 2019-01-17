<?php
ob_start(); 
include_once('template_atas.php'); 
require 'function.php';
include_once('koneksi.php');

    $sql = "SELECT * FROM data
            WHERE id
            ORDER BY id DESC";
    $query = mysqli_query($kon, $sql);
  
    $row= mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<form action="hasil_input_simpan.php" method="post" enctype="multipart/form-data">
<html>
<head>
	<title>Input Admin</title>
</head>
<body>
	<section class="tambah" id="tambah">
    <div class="container">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Edit Data Wisata</h2>
				<hr>
			</div>
		</div>
	
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<table class="table">
  <tbody>
    <tr>
      <th scope="row">ID Wisata</th>
            <td><input type="text" name="id"  value="<?php echo $row['id'];?>"></td>
        </tr>
    <tr>
      <th scope="row">Nama Wisata</th>
            <td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
    </tr>
    <tr>
      <th scope="row">Alamat</th>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat'];?>"></td>
    </tr>
    <tr>
      <th scope="row">fasilitas</th>
            <td><input type="text" name="fasilitas" value="<?php echo $row['fasilitas'];?>"></td>
    </tr>
    <tr>
      <th scope="row">Harga Retribusi</th>
             <td><input type="text" name="biaya" value="<?php echo $row['biaya'];?>"></td>
    </tr>
    <tr>
      <th scope="row">Jumlah Pengunjung</th>
            <td><input type="text" name="pengunjung" value="<?php echo $row['pengunjung'];?>"></td>
    </tr>
    <tr>
      <th scope="row">Gambar</th>
	
	<td>
		<input type="file" name="foto"/>
		<input type="hidden" name="foto_lama" />
    <br>
		 <img src='thumb/<?php echo $row['foto'];?>"  width='100px' height='100px'/>
	</td>

    </tr>
    <tr>

    			<th a href='hasil_input_simpan.php'><button name="proses" value="Perbaharui">Edit</button>
             </a>
    		</tr>
        </tbody>
        </table>
            </div>
    	</div>
    </div>
</section>
</body>
</html>

<?php include_once('template_bawah.php'); ?>
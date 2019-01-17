<?php 
ob_start();
include_once ('template_atas.php') ; 
require 'function.php';
?>
<form action="hasil_input_simpan.php" method="post" enctype="multipart/form-data">

<html>
<head>
    <title>Input Data Wisata</title>
</head>
<body>
    <h2>Input Data Wisata</h2>
	</br>
  <div class='container table-responsive'>
    <table class="table">
  <tbody>
    <tr>
      <th scope="row">ID Wisata</th>
      <td><input type="text" name="id"/></td>
    </tr>
    <tr>
      <th scope="row">Nama Wisata</th>
      <td><input type="text" name="nama"/></td>
    </tr>
	<tr>
      <th scope="row">Alamat</th>
      <td><input type="text" name="alamat"/></td>
    </tr>
    <tr>
      <th scope="row">fasilitas</th>
      <td><input type="text" name="fasilitas"/></td>
    </tr>
    <tr>
      <th scope="row">Harga Retribusi</th>
      <td><input type="text" name="biaya"/></td>
    </tr>
	<tr>
      <th scope="row">Jumlah Pengunjung</th>
      <td><input type="text" name="pengunjung"/></td>
    </tr>
	<tr>
      <th scope="row">Gambar</th>
      <td><input type="file" name="foto"/></td>
    </tr>
	<tr>
      <th><input type="submit" value="simpan" name="proses"/></th>
      <td><input type="reset" value="reset" name="reset"/></td>
    </tr>
  </tbody>
</table>
</div>
</body>
</br>
</html>

<?php include_once('template_bawah.php'); ?>
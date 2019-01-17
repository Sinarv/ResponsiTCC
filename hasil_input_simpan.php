<?php 
ob_start();
include_once ('template_atas.php') ; ?>
<form action="input_data.php" method="post" enctype="multipart/form-data">

<html>

</html>

<?php

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$fasilitas = $_POST['fasilitas'];
	$biaya = $_POST['biaya'];
	$pengunjung = $_POST['pengunjung'];
	
	$foto = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];

	$proses = $_POST['proses'];
	
	$maxsize = 1000000;
	$typeYgBoleh = array("image/jpeg","image/png","image/pjpeg","image/jpg");

	$dirFoto = "pict";
	if(!is_dir($dirFoto)){
		mkdir($dirFoto);
	}
	$fileTujuanFoto = $dirFoto."/".$foto;

	$dirThumb = "thumb";
	if(!is_dir($dirThumb)){
		mkdir($dirThumb);
	}
	$fileTujuanThumb = $dirThumb."/".$foto;

	$dataValid = "YA";


	if(strlen(trim($id)) == 0){
		echo "<center>ID Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($nama)) == 0){
		echo "<center>Nama Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($alamat)) == 0){
		echo "<center>Alamat Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($fasilitas)) == 0){
		echo "<center>Fasilitas Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($biaya)) == 0){
		echo "<center>Biaya Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if(strlen(trim($pengunjung)) == 0){
		echo "<center>Total Pengunjung Wisata harus diisi!</center>";
		$dataValid = "TIDAK";
	}
	if($dataValid == "TIDAK"){
		echo "<center>Masih ada kesalahan, silakan perbaiki!</center><br/>";
		echo "<center><input type='button' value='Kembali' onClick='self.history.back()'/></center>";
		exit;
	}

	include "koneksi.php";


	if($proses == "Perbaharui"){
		$sql = "UPDATE data SET
				id = '$id',
				nama = '$nama',
				alamat = '$alamat',
				fasilitas = '$fasilitas',
				biaya = '$biaya',
				pengunjung = '$pengunjung',
				foto = '$foto'
				WHERE id = $id";

				echo "<br><br><br>";
				echo "<h1> <center> Data Berhasil Di Ubah </h1> <center>";
	}
	else{
		 $sql = "INSERT INTO data(id,nama,alamat,fasilitas,biaya,pengunjung,foto)
				VALUES ('$id','$nama','$alamat','$fasilitas','$biaya','$pengunjung','$foto')";
				?>
				<br><br><br>
					<h1><center>TAMBAH DATA BERHASIL</center></h1>
				<br>
    				<center>
	       					<button style="background-color: #6495ED; color: #ffffff;"><b>+</b></button>
					</center>
				<br>
	<?php
	}
	$hasil = mysqli_query($kon, $sql);

	if(!$hasil){
		echo "Gagal simpan, silakan diulangi!<br/>";
		echo mysqli_error($kon);
		echo "<br/><input type='button' value='Kembali' onClick='self.history.back()'/>";
		exit;
	}
	else{
		echo "<br>";
		echo "<center>DATA DI SIMPAN</center>";
	}if($size > 0){
		if(!move_uploaded_file($tmpName, $fileTujuanFoto)){
			echo "Gagal Upload Gambar.. <br/>";
			exit;
		}
		else{
			buat_thumbnail($fileTujuanFoto, $fileTujuanThumb);
		}
	}

	
	function buat_thumbnail($file_src, $file_dst){
		list($w_src, $h_src, $type) = getimagesize($file_src);

		switch($type){
			case 1:
				$img_src = imagecreatefromgif($file_src);
				break;
			case 2:
				$img_src = imagecreatefromjpeg($file_src);
				break;
			case 3:
				$img_src = imagecreatefrompng($file_src);
				break;
		}

		$thumb = 100;
		if($w_src > $h_src){
			$w_dst = $thumb;
			$h_dst = round($thumb / $w_src * $h_src);
		}
		else{
			$w_dst = round($thumb / $h_src * $w_src);
			$h_dst = $thumb;
		}

		$img_dst = imagecreatetruecolor($w_dst, $h_dst);

		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
		imagejpeg($img_dst, $file_dst);

		imagedestroy($img_src);
		imagedestroy($img_dst);
	}
?>
	

<?php include_once('template_bawah.php'); ?>
<?php include_once('koneksi.php');
if (isset ($_POST['id'])){
	$id = $_POST['id'];
	$foto_lama = $_POST['foto_lama'];
	$simpan = "Edit";
}else{
	$simpan = "Baru";
}
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$fasilitas = $_POST['fasilitas'];
$biaya = $_POST['biaya'];
$pengunjung = $_POST['pengunjung'];
$foto = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];

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

$sql = "UPDATE data SET
			nama= '$nama',
			alamat= '$alamat',
			fasilitas= '$fasilitas',
			biaya= '$biaya',
			pengunjung= '$pengunjung',
			foto= '$foto'
		WHERE id = '$id'";
	$query=mysqli_query($kon,$sql);
if($query){
	?>
	<script type="text/javascript">
			alert('Berhasil Diubah!');
			window.location.href='data_wisata.php';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Gagal Diubah!');
					window.location.href='edit_data_wisata.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
					?>

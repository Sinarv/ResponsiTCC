<?php include_once('koneksi.php'); 
$idpengguna = $_GET['idpengguna'];

	$sql = "delete from login where idpengguna= $idpengguna";
	$query = mysqli_query($kon, $sql); 

	if($query){
	?>
	<script type="text/javascript">
			alert('Berhasil Dihapus!');
			window.location.href='data_admin.php';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Gagal Dihapus!');
					window.location.href='data_admin.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
					?>
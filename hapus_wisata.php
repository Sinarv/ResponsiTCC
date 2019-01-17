<?php include_once('koneksi.php'); 
	$id = $_GET['id'];

	$sql = "delete from data where id= $id";
	$query = mysqli_query($kon, $sql); 

	if($query){
	?>
	<script type="text/javascript">
			alert('Berhasil Dihapus!');
			window.location.href='data_wisata.php';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Gagal Dihapus!');
					window.location.href='data_wisata.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
					?>
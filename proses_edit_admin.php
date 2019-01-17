<?php include_once('koneksi.php');
$idpengguna = $_POST['idpengguna'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$status = $_POST['status'];

$sql = "UPDATE login SET
			user= '$username',
			password= '$password',
			status= '$status'
		WHERE idpengguna = '$idpengguna'";
	$query=mysqli_query($kon,$sql);
if($query){
	?>
	<script type="text/javascript">
			alert('Berhasil Diubah!');
			window.location.href='data_admin.php';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Gagal Diubah!');
					window.location.href='edit_admin.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
					?>

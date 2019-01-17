<?php
include_once('koneksi.php');
if (isset($_POST['tambah1'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$status = $_POST['status'];

$sql = "insert into login (user,password,status) values ('$username','$password','$status')";
$query = mysqli_query($kon,$sql);
if($query){
	?>
	<script type="text/javascript">
			alert('Berhasil Ditambah!');
			window.location.href='data_admin.php';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Gagal!');
					window.location.href='input_admin.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
				}
					?>
?>

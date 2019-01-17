<?php
include("koneksi.php") ;
if (isset($_GET['kirim_pesan'])) {
$nama = $_GET["nama"] ;
$email = $_GET["email"] ;
$pesan = $_GET["pesan"] ;

//pernyataan sql
$sql = "INSERT INTO `komentar`(`nama`, `email`, `pesan`) VALUES ('$nama', '$email', '$pesan')" ;

//jalankan query
$query = mysqli_query($kon, $sql) ;

if($query){
	?>
	<script type="text/javascript">
			alert('Pesan Terkirim');
			window.location.href='index.php?home';
			</script>
	<?php
			}else{
	?>
		<script type="text/javascript">
					alert('Pesan Gagal!');
					window.location.href='form_login.php';
	  	</script>
	<?php
				}
					//tutup query
					mysqli_close($kon) ;
				}
					?>
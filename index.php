<?php
ob_start(); 
include_once ('template_atas.php') ; 
?>

<html><div id="container">
<head>
	<!--Jumbotron-->
	<div class="jumbotron">
			<center>			
				<h1>WISATA YOGYAKARTA</h1>
			</center>

</div>
</head>
<!--Body -->
<body>
	<section class="populer" id="populer">
		<div class="container-fluid">
		<div class="row"> 
			<div class="col-sm-12">
				<h2 class="text-center">Daftar Wisata</h2>
				<hr>
			</div>
		</div>
		
		<div class="row">
	<div class="col-sm-3">
			<div class="thumbnail">
				<div class="caption">
					<h3>Daftar Wisata Pantai Jogjakarta</h3>
					<img src="img/pantai.jpg">
					<p><br></p>
					<p><a href="pantai.php" class="btn btn-primary">Lihat</a></p>
				</div>
			</div>
		</div>
 
		<div class="col-sm-3">
			<div class="thumbnail">
				<div class="caption">
					<h3>Daftar Wisata Candi Jogjakarta</h3>
					<img src="img/candi.jpg">
						<p><br></p>
					<a href="candi.php" class="btn btn-primary"">Lihat</a></p>
				</div>
			</div>
		</div>
 
		<div class="col-sm-3">
			<div class="thumbnail">
				<div class="caption">
					<h3>Daftar Wisata Alam Jogjakarta</h3>
					<img src="img/alam.jpg">
						<p><br></p>
					<p><a href="alam.php" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>
 	
		<div class="col-sm-3">
			<div class="thumbnail">
				<div class="caption">
					<h3>Daftar Wisata Belanja Jogjakarta</h3>
					<img src="img/belanja.jpg">
						<p><br></p>
					<p><a href="belanja.php" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>
 
	</div>
	<br/>
</div>
</section>


<!--kelas kedual-->


<section class="populer1" id="populer1">
	<div class="container-fluid">
		<div class="row"> 
			<div class="col-sm-12">
				<h2 class="text-center">Wisata Populer</h2>
				<hr>
			</div>
		</div>
		

		<?php
		include "koneksi.php";
		$query = "SELECT nama, foto, SUM(pengunjung) AS total_pengunjung
				FROM data
				GROUP BY nama
				ORDER BY total_pengunjung DESC
				LIMIT 4
				";
		$hasil = mysqli_query($kon, $query);
		while($data = mysqli_fetch_assoc($hasil)){
	        echo "<div class='col-sm-3'>";
			echo "<div class='thumbnail'>";
				echo "<div class='caption'>";
				    echo "<h3>{$data['nama']}</h3>";
					echo "<img src='thumb/{$data['foto']}'";
					echo "<p><br></p>";
					echo "<p><a href='data_lengkap_wisata.php?nama=".$data['nama']."' class='btn btn-primary'>Lihat</a></p>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
		}
        ?>
 

	<br/>
	</div>
</section>


<section class="kontak" id="kontak">
	<div class="container-fluid">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Kontak</h2>
				<hr>
			</div>
		</div>
	
<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="proses_komentar.php" method="get">
  				<div class="form-group">
    				<label for="exampleInputEmail1">Nama</label>
    				<input type="Nama" class="form-control" name = "nama" id="nama" placeholder="Masukan Nama">
    			</div>
    			<div class="form-group">
    				<label for="exampleInputEmail1">Email</label>
    				<input type="Email" class="form-control" name="email" id="nama" placeholder="Masukan Email">
    			</div>
    			<div class="form-group">
    				<label for="exampleInputEmail1">Pesan</label>
    				<textarea class="form-control" name="pesan" rows="10"></textarea>
    			</div>
    				<button type="submit" class="btn btn-primary" name="kirim_pesan">Kirim Pesan</button>

		</div>
	</form>
</div>
</div>
</div>
</section>
</body>	
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>
</html>


<?php include_once('template_bawah.php'); ?>		

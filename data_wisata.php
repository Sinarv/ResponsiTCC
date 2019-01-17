<?php 
ob_start();
include_once('template_atas.php');
require 'function.php'; 
include_once('koneksi.php');

  $sql = "SELECT * FROM data
			WHERE id
			ORDER BY id DESC";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil){
		die("Gagal query..".mysqli_error($kon));
	}
?>
<html>
	<head> 
		<title>Data Wisata</title>
	</head>
<body>

<div class="container table-responsive">
<a href="input_data.php" class="btn btn-primary navbar-btn"">Tambah</a>
<table class="table" border="1">
	<div class="col-sm-12">
	<div class="row">
	<tr style="background-color: #4169E1;">
        <th>No</th>
        <th width='50px'>Foto</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Fasilitas</th>
        <th>Biaya</th>
        <th>Penjunjung</th>
        <th>Operasi</th>
      </tr>
        <?php
        $i=1;
		while($row = mysqli_fetch_assoc($hasil)){
			
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td><a href='pict/{$row['foto']}'</a>
				  <img src='thumb/{$row['foto']}' width='100px' height='100px'>
				 </td>";	
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['fasilitas']."</td>";
			echo "<td>".$row['biaya']."</td>";
			echo "<td>".$row['pengunjung']."</td>";
			echo "<td><center> <a href='edit_data_wisata.php?id=" . $row['id']." '><button>Edit</button>
			 </a>
			 </br>
			 				<a href='hapus_data_wisata.php?id=" . $row['id']." '><button>Hapus</button>
			 </a> </center></td>"; 
			echo "</tr>";
				$i++;
		}
	
		?>
  </table>
</div>
</div>
</div>
</body>
  </section>
</html>

<br>
<?php include_once ('template_bawah.php') ; ?>

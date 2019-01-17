<?php 
ob_start();
include_once('template_atas.php');
require 'function.php'; 
include_once('koneksi.php');

  $sql = "SELECT * FROM login
			WHERE idpengguna
			ORDER BY idpengguna DESC";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil){
		die("Gagal query..".mysqli_error($kon));
	}
?>
<html>
	<head> 
		<title>admin</title>
	</head>
		<section class="data_a" id="data_a">
<body>
<a href="input_admin.php" class="btn btn-primary navbar-btn"">Tambah</a>	
	 <div class="table-responsive">
		<table class="table table-bordered table-sm-6 bawah" >
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Status</th>
        <th>Operasi</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
		while($row = mysqli_fetch_assoc($hasil)){
			
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['user']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td> <a href='edit_admin.php?idpengguna=" . $row['idpengguna']." '><button>Edit</button> </a> 
			 			<a href='hapus_admin.php?idpengguna=" . $row['idpengguna']." '><button>Hapus</button>
			 			</a> </td>"; 
			echo "<tr>";
				$i++;
		}
	
		?>
    </tbody>
  </table>

</div>

</body>
  </section>
</html>

<br>
<?php include_once ('template_bawah.php') ; ?>

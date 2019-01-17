<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "wisata";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
		die("Gagal Koneksi...");
	
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil) {
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
			die("Gagal Buat Database");
		else
			$hasil = mysqli_select_db($kon, $dbName);
			if (!$hasil) die ("Gagal konek Database");
	}
$sqlTabelUser = "create table if not exists login (
		idpengguna int auto_increment not null primary key,
		user varchar (25) not null,
		password varchar(50) not null,
		status varchar(12) not null)";
	mysqli_query($kon,$sqlTabelUser) or die ("Gagal Buat Tabel Pengguna");

$sql = "select * from login";
$hasil = mysqli_query($kon,$sql);
$jumlah = mysqli_num_rows($hasil);
	
if($jumlah==0){
$sql = "insert into login (user,password,status)
	   values ('admin',md5('123'),'aktif')";
	   mysqli_query($kon,$sql);
}		
	?>
<html lang="id" id="home">
<div id="container">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstraps/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<TITLE>Login</TITLE>
	
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php?home">Beranda</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>	
 </head>
 <script src="js/script.js"></script>
 <script src="bootstraps/jquery.min.js"></script>
<body>	
	<section class="login" id="login">
	<div class="container-fluid">
	<div class="row"> 
		<div class="col-sm-12">
				<h2 class="text-center">Login</h2>
				<hr>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form method="post" action="proses_login.php">
  				<div class="form-group">
    				<label>User</label>
    				<input type="text" class="form-control" name="user" id="nama" placeholder="Masukan User">
    			</div>
    			<div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
    			</div>
    			<button center type="submit" class="btn btn-primary" name="login">Login</button>
	</form>
</div>
</div>
</div>
</section>
</body>
</div>
</html>
<?php 
include('template_bawah.php'); ?>
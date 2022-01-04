<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1">
	<title>Login | Store </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container"> 
		<h1><a href="dashboard.php">TOKO KOMPUTER</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="data_kategori.php">Data Katagori</a></li>
			<li><a href="data_produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</div>
 </header>

 <!-- content -->
 <div class="section">
 	<div class="container">
 		<h3>Dashboard</h3>
 		<div class="box">
 			<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> ditoko online</h4>
 		</div>
 	</div>
 </div>


 <!-- footer-->
 	<div class="container">
 		<small>Copyright &copy; 2021 -toko komputer</small>
 	</div>
</body>
</html>
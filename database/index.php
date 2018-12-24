<?php
require_once('kon.php');
session_start();
if(!isset($_SESSION['user'])){

?>

<body>
	
	dor ini adalah halaman awal
	<br>
	<a href="wisata.php">Daftar Wisata</a>

	<br>
	<a href="login.php">Login</a>

	<br>
	<a href="daftar.php">daftar</a>

</body>

<?php
} else {
	header('location:index_log.php');
}
?>

	


<?php
require_once('kon.php');
session_start();
if(isset($_SESSION['user'])){
	if($_SESSION['user'] == "admin"){
		header('location: adm/admin.php');
	}else{
$u = $_SESSION['user'];
$query = mysqli_query($con, "SELECT * FROM login where user = '$u'");
$record = mysqli_fetch_array($query)
?>

<body>
	
	hai, <?php echo $record['nama']; ?>
	<br>

	<a href="logout.php">Logout</a>
<br>
	<a href="wisata.php">Daftar Wisata</a>

</body>

<?php
}
} else {
header('location: login.php');
}
?>


	


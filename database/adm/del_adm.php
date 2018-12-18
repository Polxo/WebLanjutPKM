<?php
require_once('kon.php');

if($_GET['id_wis'] != ""){
	mysqli_query($con, "DELETE FROM wisata WHERE id_wis = '".$_GET['id_wis']."' ");

	echo "<script>alert('Data Berhasil dihapus')</script>";
	echo "<meta http-equiv='refresh'content='0;url=admin.php'>";
}
?>
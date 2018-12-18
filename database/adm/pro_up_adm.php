<?php
require_once ('kon.php');

if (isset($_POST['update'])) {
	$query = "UPDATE wisata SET nm_wis = '".$_POST['nm_wis']."', kordinat = '".$_POST['kordinat']."', lokasi = '".$_POST['lokasi']."', jenis_wis = '".$_POST['jenis_wis']."', penjelasan = '".$_POST['penjelasan']."' WHERE id_wis = '".$_POST['id_wis']."'; ";

	$hasil = mysqli_query($con, $query) or die (mysqli_error());
?>
	<script>
		alert("data sukses Diupdate"); 
		window.location='admin.php';
	</script> 
	<?php 
	}
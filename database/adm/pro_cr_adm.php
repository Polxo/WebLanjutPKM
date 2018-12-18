<?php
require_once('kon.php');

$n = $_POST['nm_wis'];
$k = $_POST['kordinat'];
$l = $_POST['lokasi'];
$j = $_POST['jenis_wis'];
$p = $_POST['penjelasan'];
$query = mysqli_query($con, "SELECT * FROM wisata where nm_wis = '$n'");
$cek = mysqli_num_rows($query);

if (isset($_POST['submit'])) {
	if(empty($n || $k || $l || $j || $p)){
	?>
	<script type="text/javascript">
		alert('Data Tidak Boleh Kosong');
		window.location='cr_adm.php';
	</script>

		<?php
	} else {

	if ($cek > 0) {
		?>
	<script type="text/javascript">
		alert('Nama Wisata sudah ada');
		window.location='cr_adm.php';
	</script>

		<?php
		} else {	
		$q = "INSERT INTO wisata (id_wis, nm_wis, kordinat, lokasi, jenis_wis, penjelasan) values 
('', '".$_POST['nm_wis']."', '".$_POST['kordinat']."', '".$_POST['lokasi']."', '".$_POST['jenis_wis']."','".$_POST['penjelasan']."' )";

		$hasil = mysqli_query($con,$q) or die (mysql_error());
		?>
	<script type="text/javascript">
		alert('Penambahan Konten Berhasil');
		window.location='admin.php';
	</script>
	<?php
}}}
	?>

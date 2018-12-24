<?php
require_once('kon.php');

$u = $_POST['user'];
$p = $_POST['pass'];
$query = mysqli_query($con, "SELECT * FROM login where user = '$u'");
$cek = mysqli_num_rows($query);

if (isset($_POST['submit'])) {
	if(empty($u || $p)){
	?>
	<script type="text/javascript">
		alert('Username atau passwor tidak boleh kosong');
		window.location='daftar.htm';
	</script>

		<?php
	} else {

	if ($cek > 0) {
		?>
	<script type="text/javascript">
		alert('Username telah terpakai');
		window.location='daftar.htm';
	</script>

		<?php
		} else {	
		$q = "INSERT INTO login (ID, nama, alamat, email, user, pass) values ('', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['mail']."','".$_POST['user']."', '".$_POST['pass']."' )";

		$hasil = mysqli_query($con,$q) or die (mysql_error());
		?>
	<script type="text/javascript">
		alert('Pendaftaran akun berhasil');
		window.location='login.htm';
	</script>
	<?php
}}}
	?>
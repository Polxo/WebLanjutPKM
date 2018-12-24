<?php
require_once('kon.php');

if (isset($_POST['submit'])) {
	$u = $_POST['user'];
	$p = $_POST['pass'];

		if(empty($u || $p)){
			?>
			<script type="text/javascript">
				alert('Username atau passwor tidak boleh kosong');
				window.location='index.php#!daftar';
			</script>

			<?php
		} 
		else
		{
			$query = mysqli_query($con, "SELECT * FROM login where user = '$u'");
			$cek = mysqli_num_rows($query);
			
			if ($cek > 0) {
				?>
				<script type="text/javascript">
					alert('Username telah terpakai');
					window.location='index.php#!daftar';
				</script>

				<?php
			} 
			else 
			{	
					$q = "INSERT INTO login (ID, nama, alamat, email, user, pass) values ('', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['mail']."','".$_POST['user']."', '".$_POST['pass']."' )";

					$hasil = mysqli_query($con,$q) or die (mysql_error());
					?>

					<script type="text/javascript">
						alert('Pendaftaran akun berhasil');
						window.location='index.php#!login';
					</script>
					<?php
			}
		}
}
	?>
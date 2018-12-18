
<?php
	require_once('kon.php');
	session_start();

	$u = $_POST['user'];
	$p = $_POST['pass'];

	$query = mysqli_query($con, "SELECT * FROM login where user='$u' and pass='$p'");
	
	$cek = mysqli_num_rows($query);



	if($cek > 0) {
		$_SESSION['user'] = $u;
		$_SESSION['status'] = "login"; 
		header('location: index_log.php');
	} else {
		?>
		<script type="text/javascript">
			alert('Login Gagal');
			window.location= 'login.php';
	</script>
		<?php
	}
?>


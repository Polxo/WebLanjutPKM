<?php
require_once('kon.php');
session_start();
if(isset($_SESSION['user'])){

?>

<body>
<h1>TABLE PARIWISATA</h1>

<TABLE >	

<?php
$query = mysqli_query($con,"SELECT * FROM Wisata");
while ($rec = mysqli_fetch_array($query)) {
?>
	<tr align="center">
		<td>Nama Wisata</td>
		<td><?php echo $rec['nm_wis']; ?></td>
	</tr>

	<tr>
		<td>Koordinat</td>
		<td><?php echo $rec['kordinat']; ?></td>
	</tr>

	<tr>
		<td>Lokasi</td>
		<td><?php echo $rec['lokasi']; ?></td>
	</tr>

	<tr>
		<td>Jenis Wisata</td>
		<td><?php echo $rec['jenis_wis']; ?></td>
	</tr>

	<tr>
		<td>Deskripsi</td>
		<td><?php echo $rec['penjelasan']; ?></td>
	</tr>

		<tr>
			<td><br><br></td>
		</tr>

	<?php
		}
	?>
</TABLE>
</body>
<?php
} else {
	header('location:login.php');
}
?>

	


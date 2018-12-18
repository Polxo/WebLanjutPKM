<?php
require_once('kon.php');
$id = $_GET['id_wis'];
$q = mysqli_query($con, "SELECT * FROM wisata where id_wis = '$id'");
while ($rec = mysqli_fetch_array($q)) {
?>

<h3>UPDATE ADMIN</h3>
<form action="pro_up_adm.php" method="post">		
		<table border="1">

<tr>
	<td>Nama Wisata</td>
	<td>:</td>
	<td>
		<input type="hidden" name="id_wis" value="<?php echo $_GET['id_wis']?>"> 
		<input type="text" name="nm_wis" value="<?php echo $rec['nm_wis'] ?>">
	</td>
</tr>

<tr>
	<td>Koordinat</td>
	<td>:</td>
	<td><input type="text" name="kordinat" value="<?php echo $rec['kordinat'] ?>"></td>
</tr>


<tr>
	<td>Lokasi</td>
	<td>:</td>
	<td><input type="text" name="lokasi" value="<?php echo $rec['lokasi'] ?>"></td>
</tr>

<tr>
	<td>Jenis Wisata</td>
	<td>:</td>
	<td><input type="text" name="jenis_wis" value="<?php echo $rec['jenis_wis'] ?>"></td>
</tr>

<tr>
	<td>Deskripsi</td>
	<td>:</td>
	<td><input type="text" name="penjelasan" value="<?php echo $rec['penjelasan'] ?>"></td>
</tr>

<tr>
	<td colspan="3" align="center"><input type="submit" name="update" value="Update"></td>
</tr>
				
		</table>
	</form>
<?php
}
	?>
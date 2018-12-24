<?php
require_once('kon.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="pro_cr_adm.php" method="POST">
<table border="2">

<tr>
	<td>Nama Wisata</td>
	<td>:</td>
	<td><input type="text" name="nm_wis"></td>
</tr>

<tr>
	<td>Koordinat</td>
	<td>:</td>
	<td><input type="text" name="kordinat"></td>
</tr>


<tr>
	<td>Lokasi</td>
	<td>:</td>
	<td><input type="text" name="lokasi"></td>
</tr>

<tr>
	<td>Jenis Wisata</td>
	<td>:</td>
	<td><input type="text" name="jenis_wis"></td>
</tr>

<tr>
	<td>Deskripsi</td>
	<td>:</td>
	<td><input type="text" name="penjelasan"></td>
</tr>

<tr>
	<td colspan="3"><input type="submit" name="submit" value="Tambah"></td>
</tr>
	
</table>
</body>

</html>

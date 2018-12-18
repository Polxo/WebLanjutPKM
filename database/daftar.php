<?php
require_once('kon.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="pros_daf.php" method="POST">
<table border="2">

<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" name="nama"></td>
</tr>

<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name="alamat"></td>
</tr>


<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" name="mail"></td>
</tr>

<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type="text" name="user"></td>
</tr>

<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" name="pass"></td>
</tr>

<tr>
	<td colspan="3"><input type="submit" name="submit"></td>
</tr>
	
</table>
</body>
</html>



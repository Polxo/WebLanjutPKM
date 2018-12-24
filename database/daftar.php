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


<!--startdaftar-->
			<div class="daftar">
					<div class="modal-dialog text-center">
						<div class="col-sm-9 main-section">
							
							<div class="modal-content">
								
								<div class="col-12 user-img" style="margin-top: 50px;">
									<img src="img/face.png">
								</div>
								
								<div class="col-12 form-input">
									<form action="pros_daf.php" method="POST">
										<div class="form-group">
											<input name="nama" type="text" class="form-control" placeholder="Enter Nama">
										</div>
										<div class="form-group">
											<input name="alamat" type="text" class="form-control" placeholder="Enter Alamat">
										</div>
										<div class="form-group">
											<input name="mail" type="email" class="form-control" placeholder="Enter Email">
										</div>
										<div class="form-group">
											<input name="user" type="text" class="form-control" placeholder="Enter User">
										</div>
										<div class="form-group">
											<input name="pass" type="password" class="form-control" placeholder="Enter Password">
										</div>
										<button name="submit" type="submit" class="btn btn-success">Daftar</button>
									</form>
								<TABLE >	
								</div>
								<div class="col-12 Login">
									<a href="#">sudah mempunyai akun ?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- end daftar-->
<?php
require_once('kon.php');
session_start();
if(!isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="sesion.php" method="POST">
	username : <input type="text" name="user"> <br>
	password : <input type="password" name="pass"> <br>
	<input type="submit" name="submit">

</body>
</html>
<?php
} else {
	header('location:index_log.php');
}
?>
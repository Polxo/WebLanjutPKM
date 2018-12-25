<?php

$server ='localhost';
$username ='root';
$password ='';
$database ='coi';

$con = mysqli_connect($server,$username,$password) or die("koneksi gagal");
mysqli_select_db($con, $database)or die("database belum ada,silahkan import database");
?>
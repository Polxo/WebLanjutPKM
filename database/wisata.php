<?php
require_once ('kon.php');
?>

<body>
	<h2>Wisata</h2>
	<table border="1" width="100">
		<tr>
			<?php 
			 $query = mysqli_query($con, "SELECT * FROM wisata");
			 while ($record = mysqli_fetch_array($query)) {
			 ?>
			 
			<td><?php echo $record['nm_wis']; ?></td>
		</tr>

		<tr>
			<td><?php echo $record['lokasi']; ?></td>
		</tr>

		<tr>
			<td><?php echo $record['penjelasan']; ?></td>	
		</tr>
			<?php
}
	?>
	</table>

</body>
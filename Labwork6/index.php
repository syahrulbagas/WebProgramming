<?php 
require_once 'config.php';
require 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modul 06</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body> 
	<table class="table table-hover table-bordered" style="margin-top: 10px">
		<tr class="success">
			<th width="50px">No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Email</th>
			<th>Waktu Pembuatan</th>
		</tr>
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$row = $koneksi->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		$a =1;
		foreach($hasil as $isi){
			?>
			<tr>
				<td><?php echo $a ?></td>
				<td><?php echo $isi['nama']?></td>
				<td><?php echo $isi['nim'];?></td>
				<td><?php echo $isi['email'];?></td>
				<td><?php echo $isi['created_at'];?></td>
			</tr>
			<?php
			$a++;
		}
		?>
	</table>

	<?php require "footer.php" ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
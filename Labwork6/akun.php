
<?php 
require 'header.php';
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Akun Modul 06</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<table class="table table-hover table-bordered" style="margin-top: 10px">
		<tr class="success">
			<th width="50px">No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Waktu Pembuatan</th>
		</tr>
		<?php
		$sql = "SELECT * FROM user";
		$row = $koneksi->prepare($sql);
		$row->execute();
		$hasil = $row->fetchAll();
		$a =1;
		foreach($hasil as $isi){
			?>
			<tr>
				<td><?php echo $a ?></td>
				<td><?php echo $isi['username']?></td>
				<td><?php echo $isi['password'];?></td>
				<td><?php echo $isi['created_at'];?></td>
			</tr>
			<?php
			$a++;
		}
		?>
	</table>
</body>

<?php require 'footer.php'; ?>
</html>
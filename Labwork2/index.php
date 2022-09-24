<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Latihan 1</h1>
	<?php 
	echo "<p>Hello World</p>";
	 ?>

	 <h1>Latihan 2</h1>
	<?php
 	$a = '14';
	$b = '11';
 	$c = $a + $b;
	echo ('Hasil perhitungan adalah &nbsp;' .$c);
	?>

	<h1>Latihan 3</h1>
	<?php
	$z = ['nama'=>"agus",'nim'=>"k1424567",'alamat'=>"Solo",'bidang'=>"RPL"];
	echo $z['nama'];
	?>
	
	<h1>Latihan 4</h1>
	<?php 
	$objek = new stdClass();
	$objek = ['name' => "Steven William", 'age' => 30, 'city'=> "Kartosuro"];

	$myJSON = json_encode($objek);
	echo $myJSON;
 ?>
</body>
</html>
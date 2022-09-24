<!DOCTYPE html>
<html>
<head>
	<title>Tabung</title>
</head>
<body>
<?php
$namaTabung = array("A","B","C","D","E");
$diameter = array("10","15","8.5","12.8","13.125");
$tinggi = array("30","34","27.8","17.56","15.7");
?>
<table border="1">
		<tr>
			<th>NAMA TABUNG</th>
			<th>DIAMETER</th>
			<th>TINGGI</th>
			<th>LUAS</th>
		</tr>
		<th name="nama"> <?php echo "$namaTabung[0]";?>	</th>
		<th name="diameter"> <?php echo "$diameter[0]";?> </th>
		<th name="tinggi"> <?php echo "$tinggi[0]";?></th>
		<th><a href="hitungluas.php?n=A&d=10&t=30" onclick="" target="_blank">view</a></th>

		<tr>		
			<th name="nama"> <?php echo "$namaTabung[1]";?>	</th>
			<th name="diameter"> <?php echo "$diameter[1]";?> </th>
			<th name="tinggi"> <?php echo "$tinggi[1]";?> </th>
			<th> <a href="hitungluas.php?n=B&d=15&t=34" onclick="" target="_blank">view</a></th>
		</tr>
		<tr>	
			<th name="nama"> <?php echo "$namaTabung[2]";?>	</th>
			<th name="diameter"> <?php echo "$diameter[2]";?> </th>
			<th name="tinggi"> <?php echo "$tinggi[2]";?> </th>
			<th> <a href="hitungluas.php?n=C&d=8.5&t=27.8" onclick="" target="_blank">view</a></th>
		</tr>
		<tr>	
			<th name="nama"> <?php echo "$namaTabung[3]";?>	</th>
			<th name="diameter"> <?php echo "$diameter[3]";?> </th>
			<th name="tinggi"> <?php echo "$tinggi[3]";?> </th>
			<th> <a href="hitungluas.php?n=D&d=12.8&t=17.56" onclick="" target="_blank">view</a></th>
		</tr>
		<tr>	
			<th name="nama"> <?php echo "$namaTabung[4]";?>	</th>
			<th name="diameter"> <?php echo "$diameter[4]";?> </th>
			<th name="tinggi"> <?php echo "$tinggi[4]";?> </th>
			<th> <a href="hitungluas.php?n=E&d=13.125&t=15.7" onclick="" target="_blank">view</a></th>
		</tr>
	</table>

</body>
</html>
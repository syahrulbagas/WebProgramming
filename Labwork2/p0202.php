<?php

	$nama[] = "Sulis | K3510001 | Solo | RPL";
	$nama[] = "Rendi | K3510002 | Klaten | TKJ";
	$nama[] = "Jatmiko | K3510003 | Boyolali | Multimedia";
	$nama[] = "Feri | K3510004 | Wonogiri | RPL";
	echo $nama[1];
	echo "<br>";
	for($i=0;$i<count($nama);$i++){
		echo $nama[$i]."<br>";
	}

?>
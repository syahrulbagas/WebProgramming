<?php 
function hitungGaji($gol, $masaKerja){
	$gaji1 = 5000000;
	$gaji2 = 7000000;
	$gaji3 = 6000000;
	$gaji4 = 8000000;
	switch ($gol) {
		case 'A':
			if(floor($masaKerja) < 10){
				echo "Gaji Golongan A = Rp.$gaji1";
			}else{
				echo "Gaji Golongan A = Rp.$gaji2";
			}
			break;
			case 'B':
				if (floor($masaKerja) < 10 ) {
					echo "Gaji Golongan B = Rp.$gaji3";
				}else{
					echo "Gaji Golongan B = Rp.$gaji4";
				}
				break;
		default:
			echo "Golongan Tidak Ditemukan";
			break;
	}
}

hitungGaji('A', 8);

 ?>
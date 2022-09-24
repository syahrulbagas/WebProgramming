<?php
	$namaTabung  = $_GET['n'];
    $diameter    = $_GET['d'];
    $tinggi      = $_GET['t'];
    $phi         = 3.14;
    $r           = $diameter / 2;
   switch ($namaTabung) {
        case ($namaTabung == "A");
            $luas = 2 * $phi * $r * ($r + $tinggi);
            echo "Luas Tabung A dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
        break;
        case ($namaTabung == "B");
            $luas = 2 * $phi * $r * ($r + $tinggi);
            echo "Luas Tabung B dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
        break;
        case ($namaTabung == "C");
            $luas = 2 * $phi * $r * ($r + $tinggi);
            echo "Luas Tabung C dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
        break;
        case ($namaTabung == "D");
            $luas = 2 * $phi * $r * ($r + $tinggi);
            echo "Luas Tabung D dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
        break;
        case ($namaTabung == "E");
            $luas = 2 * $phi * $r * ($r + $tinggi);
            echo "Luas Tabung E dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luas." satuan luas";
        break;
    }


?>
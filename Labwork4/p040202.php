<?php
   function hitungDenda($tglHarusKembali, $tglKembali) {

        $besarDenda			= 5000;
        $tglPengembalian 	= new DateTime($tglHarusKembali);
        $tglKembali 		= new DateTime($tglKembali);
        $HariTerlambat		= $tglKembali  -> diff($tglPengembalian ) -> days;
        $total				= $HariTerlambat * $besarDenda ;
        return $total;
    }
    echo "Besarnya denda adalah : Rp ".hitungDenda("2021-09-25","2021-09-27");

?>
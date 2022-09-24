<?php
// Formasi Bintang

// Deklarasi function
function buatBintang($n)
{
    for ($i = 0; $i <=5; $i++)
    {
        for($j = 4-$i; $j >=1; $j-- )
        {
            // Tampilkan Bintang
            echo "*";
        }
        echo "<br>";
    }
}
buatBintang(4);
?>

<?php
// Formasi Bintang

// Deklarasi function
function buatBintang($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            // Tampilkan Bintang
            echo "* ";
        }
        echo "<br>";
    }
}
buatBintang(4);
echo "<br>";
buatBintang(5);
?>

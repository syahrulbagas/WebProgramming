<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P030202</title>
</head>
<body>
<table border=1>
        <?php
        for ($a=1; $a<=5; $a++) {
            echo "<tr>";
            for ($b=1; $b<=6; $b++){
                $jumlah = $a + $b;
                if ($jumlah % 2 == 1) {
                    echo "<td style='color:red'>Element ".$a." - ".$b."</td>";
                }
                else {
                    echo "<td style='background-color:red'>Element ".$a." - ".$b."</td>";
                }
                
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
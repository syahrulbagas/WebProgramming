<?php
include 'cookie.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bermain Dengan Tema</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="--background_color: <?= $background_color ?>; --font_size: <?= $font_size ?>;">
    <div class="container">
        <form method="post" action="">
            <h3>SETTING</h3>
            <div>Background</div>
            <select name="background_color">
                <?php
                $colors = array('#4e79a0' => 'Biru', '#75b14a' => 'Hijau', '#d06353;' => 'Merah');
                foreach ($colors as $name => $value) {
                    $selected = $name == $_POST['background_color']? 'SELECTED="SELECTED"' : '';
                    echo '<option value="'.$name.'"'.$selected.'>'.$value.'</option>';
                }
                ?>
            </select>
    
            <div>Font Size</div>
            <select name="font_size">
                <?php
                $font_sizes = array('15px', '17px', '20px', '25px');
                foreach ($font_sizes as $value) {
                    $selected = $value == $_POST['font_size'] ?'SELECTED="SELECTED"' : '';
                    echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
                }
                ?>

            </select>
            <div class="remember">
                <input type="checkbox" id="remember" name="remember"/>
                <label for="remember"> Remember</label>
            </div>
            <div class="tombol">
                <input type="submit" class="button blue" name="submit" value="Simpan"/>
                <input type="submit" class="button red" name="hapus_cookie" value="Hapus Cookie"/>
            </div>
        </form>
    </div>
</body>
</html>l
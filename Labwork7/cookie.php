<?php
$font_size = "15px";
$background_color = "#4e79a0";

if($_POST) {
    $background_color = $_POST['background_color'];
    $font_size = $_POST['font_size'];
} else{
    if(isset($_COOKIE['background_color'])){
        $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
        
    } if(isset($_COOKIE['font_size'])){
        $_POST['font_size'] = $font_size = $_COOKIE['font_size'];
    }
}

//Hapus cookie
$msg = false;
if(isset($_POST['hapus_cookie'])){
    setcookie("background-color", "", 1, "/");
    setcookie("font-size", "", 1, "/");
    $msg = "Cookie berhasil dihapus";
}

//mengatur cookie selama 1 hari
if(isset($_POST['remember'])){
    setcookie("background-color", $_POST['background_color'], strtotime('+1days'), '/');
    setcookie("font-size", $_POST['font_size'], strtotime('+1days'), '/');
    $msg = "Cookie berhasil disimpan";
}




?>
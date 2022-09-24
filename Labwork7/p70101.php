<!doctype HTML>
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-
scale=1"> 
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous"> 
    <title>Bioskop PTIK</title> 
  </head> 
  <body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <header> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <div class="container-fluid"> 
          <a class="navbar-brand" href="#">Bioskop PTIK</a> 
          <button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-
controls="navbarNavAltMarkup" aria-expanded="false" aria-
label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
          </button> 
          <div class="collapse navbar-collapse" 
id="navbarNavAltMarkup"> 
            <div class="navbar-nav"> 
              <a class="nav-link" href="#">Home</a> 
              <a class="nav-link" href="#">Ruang 1</a> 
              <a class="nav-link" href="#">Ruang 2</a> 
              <a class="nav-link" href="#">Ruang 3</a> 
            </div> 
          </div> 
        </div> 
      </nav> 
    </header> 
    <main> 
      <div class="container"> 
        <div class="row mt-3"> 
          <div class="card p-3"> 
            <center> 
            <h1>Halaman Lobby</h1>
            <form method="post" action="">
          

            Nama :  <input type="text" value="" name="nama" placeholder="Masukan Nama" autocomplete="off">
            <br>
            Ruang :
            <form method="post" action="">
              <input type="radio" name="ruang" value="1"> Ruang 1 
              <input type="radio" name="ruang" value="2"> Ruang 2 
              <input type="radio" name="ruang" value="3"> Ruang 3 
              <br>
              <button type="submit" name="submit" id="btn" value="beli" class="btn btn-success" onclick="myFunction()">Beli Tiket </button>
           </form>
            <br>
            
              <?php 

                if ($_POST) {
                  session_start();

                  $_SESSION['nama'] = $_POST['nama'];
                  $_SESSION['ruang'] = $_POST['ruang'];
                  $nama = $_POST['nama'];
                  $ruang = $_POST['ruang'];
                  $link = "ruang$ruang.php";
                  
              ?>

    <p>Silahkkan klik <a href="<?php echo $link;?>">disini</a> untuk menuju ruang bioskop Anda</p>
  <?php } ?>
            </center> 
        </div> 
      </div> 
    </main> 
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script> 
  </body> 
</html> 
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
<?php 
session_start();
?>
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
              <a class="nav-link" href="ruang1.php">Ruang 1</a> 
              <a class="nav-link" href="ruang2.php">Ruang 2</a> 
              <a class="nav-link" href="ruang3.php">Ruang 3</a> 
            </div> 
          </div> 
        </div> 
      </nav> 
    </header> 
    <center>
    <?php 
    if ($_SESSION['ruang']==2) { ?>
    <h1> RUANG BIOSKOP <?php echo $_SESSION['ruang'];?> </h1>
    <div class="display-6">Hallo <?php echo $_SESSION['nama']; ?>! Selamat Menonton</div>
</center>
    <div class="container">
  <div class="col">
    <div class="card h-100">
      <iframe width="auto" height="400" src="https://www.youtube.com/embed/wMCpcAKyYRA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title">Film Komedi</h5>
        <p class="card-text">Komedi Moderen Gokil 2015 Gokiill</p>
      </div>
    </div>
    <center>
    <div>
      <br><a href="p70101.php"><button type="button" class="btn btn-secondary">Logout</button></a>
    </div>
    </center>
  <?php } else { ?>
    <div class="display-5">Anda tidak memiliki akses</div>
  <?php } ?>
  </div>
  </div>
 </body>
</html>
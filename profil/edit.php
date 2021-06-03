<?php

//memanggil config.php
require_once("config.php");

$no_telepon = $_GET['no_telepon'];
$show = mysql_query("SELECT * FROM profil WHERE no_telepon='$no_telepon' ");

if (mysql_num_rows ($show) == 0 ) {
    echo '<script>window.history.back()</script>';

} else {
    $data = mysql_fetch_assoc($show);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style/index.css" />
    <title>Profil</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container">
          <img class="logo" src="assets/3.png" alt="logo qode" />

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-navscroll"> 
              <ul class="navbar-nav bd-navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Laporan Qurban</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Beli Qurban</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Logout</a>
                </li>
              </ul>
              
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link btn-hotline border text-light" aria-current="page" href="#"><i class="fab fa-whatsapp"></i>Hotline Qurban via Whatsapp</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="container border mt-5">
      <div class="row">
        <div class="col-lg-8">
          <h2>PENGATURAN PROFIL</h2>
          <p>Profil Anda</p>

          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"> Nama</label>
              <input type="text" class="form-control" id="nama" />
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"> No. telepon</label>
              <input type="text" class="form-control" id="no_telepon" />
            </div>             
          </form>
        </div>
        <div class="d-flex align-items-end flex-column bd-highlight mb-2">
            <button class="btn btn-sm btn-danger mt-5">EDIT</button>
        </div>
    </div>
</main>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
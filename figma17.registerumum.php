<?php
require 'functions.php';

if ( isset($_POST["daftar"])) 
{
  if (daftar($_POST) > 0 ) 
  {
    echo "<script>
      alert('user baru berhasil ditambakan!');
    </script>";
  }else{
    echo mysqli_error($conn);
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <title>Figma 17: Perdaftaran Umum</title>
  </head>
  <body style="background-color: #E89A04;"> 

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light p-2">
      <div class="container">
            <a class="navbar-brand fw-bolder text-muted"><img class="bi me-3" src="menu.png" alt="" width="50" height="50" >Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active fw-bolder text-muted aria-current=page" href="home.html">Home</a>
                  <a class="nav-link fw-bolder text-muted" href="hukum.html">Hukum Qurban</a>
                  <a class="nav-link fw-bolder text-muted" href="tentang.html">Tentang Kami</a>
                  <a class="nav-link fw-bolder text-muted" href="#">List Pengqurban</a>
                  <a class="nav-link fw-bolder text-muted" href="Verifikasi">List Penerima Qurban</a> 
                  <a class="nav-link fw-bolder text-muted" href="login.php">Daftar Sebagai Pequrban</a>
                  <a class="nav-link fw-bolder text-muted" href="login.php">Login</a>
              </div>
            </div>
        </div>
      </nav>
    </nav>
    <nav class="navbar" style= "background: #F2DE75; " ></nav>
    <div class="container">
    <nav class="navbar card mt-3" style= "background: #F2DE75; " ></nav>
    </div>
    <!-- navbar penutup -->
 
    <!-- isi -->
    <div class="container">
      <div class="card mt-4" style= "background: #F2DE754A; ">
        <div class="card-header text-while text-center" style=" font-family: Yeseva One; ">
          <h2 class="text-center">
            <b>Pendaftaran Umum</b>
          </h2>
        </div>
           <!-- Bagian register -->
          <div class="card-body" style= "background: #F2DE754A; ">
            <div class="card-body text-while" style=" font-family: Yeseva One; ">
              <form action="" method="post" style="font-size: 20px;">
                <ul>
                  <div class="form-group row">
                    <label  for="nama" class="col-sm-2 col-form-label col-form-label-lg">Username :</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" id="nama"  class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Masukan data......"required>
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email :</label>
                    <div class="col-sm-10">
                     <input type="text" name="email" id="email"  class="form-control form-control-lg" id="colFormLabelLg" style="background: #F2DE75;" placeholder="Masukan data......"required>
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="form-group row">
                    <label for="no_handphone" class="col-sm-2 col-form-label col-form-label-lg">No.handphone :</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_handphone" id="no_handphone" class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Masukan data......"required>
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label col-form-label-lg">Password :</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Masukan data..."required>
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="form-group row">
                    <label for="password2" class="col-sm-2 col-form-label col-form-label-lg">Konfirmasi Password :</label>
                    <div class="col-sm-10">
                      <input type="password" name="password2" id="password2" class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Masukan data......"required>
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" name="daftar"  style="background: #C9B652;">Daftar</button>
                  </div>
                </ul>
            </form>
          </div>
        </div>

   
      </div> 
    </div>
  <nav class="navbar navbar-light" style="background-color: #e89A04; "></nav>
  </body>
</html>
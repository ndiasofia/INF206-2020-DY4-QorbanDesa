<?php

require 'functions.php';

if( isset($_POST["login"]) )
{
    $nama = $_POST["nama"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM registerumum WHERE nama = '$nama'");

    // cek nama
    if( mysqli_num_rows($result) === 1 )
    {

    //cek password
      $row = mysqli_fetch_assoc($result);
      if( password_verify( $password, $row["password"]) )
      {
        header("Location : figma12.PengajuanPenerimaQurban.php");
        exit;
      }
    }
    $error = true;
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

    <title>Figma 40: Login</title>
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
            <b>Selamat Datang</b>
          </h2>
        </div>
           <!-- Bagian register -->
        <div class="card" style= "background: #F2DE754A; ">
            <div class="card-header text-while text-center ">

              <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;">Username / Password Tidak Sesuai </p>
              <?php endif; ?>

              <form action="" method="post" class="mt-4 ">
                <ul>
                  <div class="form-group row">
                    <label  for="nama"></label>
                    <div class="container col-sm-6">
                      <input type="text" name="nama" id="nama"  class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Nama Pengguna..." style=" font-family: Yaldevi Colombo Ligh;">
                    </div>
                  </div>
                </ul>
                <ul>
                   <div class="form-group row">
                    <label  for="password"></label>
                    <div class="container col-sm-6">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" style="background: #F2DE75;" placeholder="Password...">
                    </div>
                  </div>
                </ul>
                <ul>
                  <div class="mt-4">
                    <p>belum punya akun? <a href="figma17.registerumum.php">klik register disini! </a></p>
                  </div>
                </ul>
                <ul>
                    <div class="mt-3 d-grid gap-4 col-1 mx-auto">
                      <button type="submit" name="login" style="background: #C9B652; font-family: Yeseva One;font-size: 20px;">Login</button>
                    </div>
                </ul>
              </form>
        </div>
      </div> 
    </div>
  <nav class="navbar navbar-light" style="background-color: #e89A04; "></nav>
  </body>
</html>
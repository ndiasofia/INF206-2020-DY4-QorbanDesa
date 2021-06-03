<?php

require_once("config.php");

if(isset($_POST['wargadesa'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $no_kk = filter_input(INPUT_POST, 'no_kk', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $no_telepon = filter_input(INPUT_POST, 'no_telepon', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $konfirmasi_password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO wargadesa (nama, nik, no_kk, email, no_telepon, password, konfirmasi_password) 
            VALUES (:nama, :nik, :no_kk, :email, :no_telepon, :password, :konfirmasi_password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":nik" => $nik,
        ":no_kk" => $no_kk,
        ":email" => $email,
        ":no_telepon" => $no_telepon,
        ":password_baru" => $password_baru,
        ":konfirmasi_password" => $konfirmasi_password
        
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Figma16</title>
  </head>
  <body>

    <style>
      body {
        background-color: #ffbb0098;
      }
    </style>
    
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder text-muted"><img class="bi me-3" src="home.png" alt="" width="30" height="30" >Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active fw-bolder text-muted aria-current=page" href="transaksi.html">Data Transaksi</a>
                  <a class="nav-link fw-bolder text-muted" href="laporan.html">Laporan Qurban</a>
                  <a class="nav-link fw-bolder text-muted" href="namapequrban.html">Ajukan Nama</a>
                  <!-- <a class="nav-link fw-bolder text-muted" href="verifikasi.html">Verifikasi</a> -->
                  <a class="nav-link fw-bolder text-muted" href="#">Shop</a>
                  <!-- <a class="nav-link fw-bolder text-muted" href="Pesan">Pesan</a> -->
                  <a class="nav-link fw-bolder text-muted" href="profilFigma11.html">Profil</a>
                  <a class="nav-link fw-bolder text-muted" href="logout.php">Logout</a>
                  <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
              </div>
            </div>
        </div>
      </nav>
          
      <div class="container">
        <div class="card mt-4" style= "background: #F2DE754A; ">
          <div class="card-header text-while text-center" style=" font-family: Yeseva One; ">
            <h2 class="text-center">
              <b>Pendaftaran Warga Desa</b>
            </h2>
          
          <div class="card-body";>
            <table class="table table-striped" style= "background: #F2DE75; font-family: Yrsa; text-align: center; font-size: 18px; line-height: 48px;">
             
              <tr>
                <td style="text-align: left;">Nama</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan nama..." required>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">NIK</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan NIK..." required>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">No. KK</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan No. KK..." required>
                </td>
              </tr>
          </table>
          <div class="d-grid gap-2 d-md-flex left-content-md-end">
            <button class="btn me-md-2" type="button" style="background: #C9B652">Upload Foto KK</button>
          </div>
          <div class="card-body";>
              <table class="table table-striped" style= "background: #F2DE75; font-family: Yrsa; text-align: center; font-size: 18px; line-height: 48px;">
        </div>
              <tr>
                <td style="text-align: left;">Email</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan Email..." required>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">No. Handphone</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan No. Handphone..." required>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">Password</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan Password..." required>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">Konfirmasi Password</td>
                <td>
                  <input style= "background: #F2DE75; "type="text" class="form-control" placeholder="Masukan Password..." required>
                </td>
              </tr>
              
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn me-md-2" type="button" style="background: #C9B652">Daftar</button>
            </div>  
    </div>>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
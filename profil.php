<?php

require_once("config.php");

if(isset($_POST['profil'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $no_telepon = filter_input(INPUT_POST, 'no_telepon', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password_baru = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $konfirmasi_password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO profil (nama, email, no_telepon, password_baru, konfirmasi_password) 
            VALUES (:nama, :email, :no_telepon, :password_baru, :konfirmasi_password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
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

    <title>Figma11</title>
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
      <hr color="#999999" size="10px">
    
      <h2 class="text-center">Pengaturan Profil</h2>
      
      <form role="form" action="insert.php" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="judul_bk" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="terbit_bk" class="form-control">
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="genre_bk" class="form-control">
        </div>		
            
        <h2 class="text-left">Ubah Password</h2>

        <form role="form" action="insert.php" method="post">
            <div class="form-group">
                <label>Password Baru</label>
                <input type="text" name="judul_bk" class="form-control">
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="text" name="terbit_bk" class="form-control">
            </div>
        </div>
    </form>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn me-md-2" type="button" style="background: #ffbb0098">Save</button>
    </div>
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
<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $no_telepon = filter_input(INPUT_POST, 'no_telepon', FILTER_SANITIZE_STRING);

    // menyiapkan query
    $sql = "INSERT INTO users (username, password, no_telepon) VALUES (:username, :password, :no_telepon)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":no_telepon" => $no_telepon
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../style/index.css" />

    <title>Nadia Sofia</title>
  </head>
  <body>
    
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container">
          <img class="logo" src="../assets/3.png" alt="logo qode" />

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-navscroll"> 
              <ul class="navbar-nav bd-navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Contact</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">About Us</a>
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
    
      <div class="container">
      <br>
      <h3>Bergabunglah bersama ribuan orang lainnya menjadi shohibul qurban</h3>
      <br>
        <h5>Sudah punya akun? <a href="login.php">Login di sini</a></h5>

        <form method="POST">

            <div class="form-group">
                <label id="form" for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>
            <br>

            <div class="form-group">
                <label id="form" for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <br>

            <div class="form-group">
                <label id="form" for="password">No Telepon</label>
                <input class="form-control" type="text" name="no_telepon" placeholder="No Telepon" />
            </div>

            <input id="submit-btn" type="submit" class="btn btn-block" name="register" value="Daftar" />

        </form>

    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    
  </body>
</html>
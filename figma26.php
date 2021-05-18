<?php 
$conn = mysqli_connect("localhost", "root", "", "qorban-desa");

if(isset($_POST['submit'])) {

  //ambil data dari tiap elemen form
  $nama = $_POST["nama_lengkap"];
  $email = $_POST["email"];
  $notelp = $_POST["no_telepon"];
  $hewanqurban = $_POST["hewan_qurban"];
  $metodequrban = $_POST["metode_qurban"];
  $metodebayar = $_POST["metode_bayar"];
  $buktibayar = $_POST["bukti_bayar"];
  
  //query insert
  $query = "INSERT INTO penqurban VALUES ('', '$nama', '$email', '$notelp', $hewanqurban ,$metodequrban, '$metodebayar', '$buktibayar')";
  mysqli_query($conn, $query);

  var_dump($query);

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

    <title>Figma 26</title>
  </head>
  <body style="margin: 0; padding: 0; background-color: #f2de75">

  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container-md">
        <a class="navbar-brand" href="#"> Qorban Desa</a>
      </div>
    </nav>
    <!-- end navbar -->

    <div class="container">
    <h2 class="alert alert-warning text-center mt-3">Formulir Penqurban</h2>
    
    <form action="" method="post">
            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="nama">Nama Lengkap</label> 
                </div>
                <div class="col-md-9">
                <input type="text" name="nama_lengkap" class="form-control" id="nama">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="email">email</label>
                </div>
                <div class="col-md-9">
                <input type="text" name="email" class="form-control" id="email">
                </div>
              </div> 
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="notelepon">No Telepon</label>
                </div>
                <div class="col-md-9">
                <input type="text" name="no_telepon" class="form-control" id="notelepon">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="metodebayar">Hewan Qurban</label>
                </div>
                <div class="col-md-9">
                <select class="form-select" name="hewan_qurban" aria-label="Default select example">
                  <option selected>Pilih Hewan Qurban</option>
                  <option value="sapi">Sapi</option>
                  <option value="kambing">Kambing</option>
                </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="metodebayar">Metode Qurban</label>
                </div>
                <div class="col-md-9">
                <select class="form-select" name = "metode_qurban" aria-label="Default select example">
                  <option selected>Pilih Metode Qurban</option>
                  <option value="1">individu</option>
                  <option value="2">kelompok</option>
                </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="metodebayar">Metode Pembayaran</label>
                </div>
                <div class="col-md-9">
                <select class="form-select" name="metode_bayar" aria-label="Default select example">
                  <option selected>Pilih  Metode Pembayaran</option>
                  <option value="1">BSI</option>
                  <option value="2">BRI</option>
                  <option value="3">BNI</option>
                </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                <label for="buktibayar">Bukti Setoran</label>
                </div>
                <div class="col-md-9">
                <input type="file" name="bukti_bayar" class="form-control" id="buktibayar">
                </div>
              </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Lunasi Pembayaran</button>
            </div>
    </form>
    </div>

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
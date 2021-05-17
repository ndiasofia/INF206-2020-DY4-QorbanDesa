<?php 
$conn = mysqli_connect("localhost", "root", "", "qorban-desa");

if(isset($_POST['submit'])) {

  //ambil data dari tiap elemen form
  $nama = $_POST["nama_lengkap"];
  $email = $_POST["email"];
  $notelp = $_POST["no_telepon"];
  $metodebayar = $_POST["metode_bayar"];
  $buktibayar = $_POST["bukti_bayar"];
  
  //query insert
  $query = "INSERT INTO penqurban VALUES ('', '$nama', '$email', '$notelp', '$metodebayar', '$buktibayar')";
  mysqli_query($conn, $query);

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

    <h1 class="text-center">penqurban</h1>

    <form action="" method="post">
    <h1>Lengkapi Data Diri</h1>
            <div class="form-data">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama">
            </div>
            <div class="form-data">
                <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-data">
                <label for="notelepon">No Telepon</label>
                <input type="text" name="no_telepon" id="notelepon">
            </div>
            <div class="form-data">
                <label for="metodebayar">Metode Pembayaran</label>
                <input type="text" name="metode_bayar" id="metobayar">
            </div>
            <div class="form-data">
                <label for="buktibayar">masukkan bukti setoran</label>
                <input type="file" name="bukti_bayar" id="buktibayar">
            </div>
            <div class="form-data">
                <button type="submit" name="submit">Lunasi Pembayaran</button>
            </div>
    </form>


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
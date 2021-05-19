<?php

require_once("config.php");

if(isset($_POST['transaksi'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $jumlah = filter_input(INPUT_POST, 'jumlah', FILTER_SANITIZE_STRING);
    $bukti_pembayaran = filter_input(INPUT_POST, 'bukti_pembayaran', FILTER_SANITIZE_STRING);
	$tgl = date('Y-m-d');
	
    // menyiapkan query
    $sql = "INSERT INTO data_transaksi (tanggal, name, jumlah, bukti_pembayaran) 
            VALUES (:tgl, :name, :jumlah, :bukti_pembayaran)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
		":tgl" => $tgl,
        ":name" => $name,
        ":jumlah" => $jumlah,
        ":bukti_pembayaran" => $bukti_pembayaran
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
	
	if($saved) header("Location: transaksi.php");
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

    <title>Nadia Sofia</title>
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
                  <a class="nav-link fw-bolder text-muted" href="profil.html">Profil</a>
                  <a class="nav-link fw-bolder text-muted" href="logout.php">Logout</a>
                  <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
              </div>
            </div>
        </div>
      </nav>
      <hr color="#999999" size="10px">
    
      <h2 class="text-center">Data Transaksi Qurban</h2>
      <table class="table table-bordered border-dark">
      <br>
       <div>
	   <form action="" method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control" type="text" name="name" placeholder="Masukkan nama" />
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah yang di bayar</label>
                <input class="form-control" type="text" name="jumlah" placeholder="Masukkan jumlah" />
            </div>

            <div class="form-group">
                <label for="bukti_pembayaran">Bukti Pembayaran</label>
                <input class="form-control" type="file" name="bukti_pembayaran" placeholder="Upload file bukti pembayaran (gambar)" />
            </div>
			<br>
            <input type="submit" class="btn btn-warning btn-block" name="transaksi" value="Kirim" />

        </form>
		</div>
    </div>
	
	  <table class="table table-bordered border-dark">
      <br>
        <thead>
          <tr>
			<th class="text-center">No</th>
			<th class="text-center">Tanggal</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jumlah yang Dibayar (Rp)</th>
            <th class="text-center">Bukti Pembayaran</th>
            <th class="text-center">Keterangan</th>
          </tr>
        </thead>

        <tbody> 
						
			<?php
  $konek = mysqli_connect("localhost","root","");
  $database = mysqli_select_db($konek, "qode");  
  
  $no = 1;
  $data = mysqli_query($konek,"select * from data_transaksi");
  while($r = mysqli_fetch_array($data)){
	  $tanggal = $r['tanggal'];
   $name = $r['name'];
   $jumlah = $r['jumlah'];
   $bukti_pembayaran = $r['bukti_pembayaran'];
   $keterangan = $r['keterangan'];
        ?>
		
  <tr>
   <td><?php echo $no++; ?></td>
   <td><?php echo $tanggal; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $jumlah; ?></td>
   <td><?php echo $bukti_pembayaran; ?></td>
   <td><?php if ($keterangan == true){ 
   echo 'Telah dikonfirmasi';}
			else {
			echo 'Belum dikonfirmasi';}
			 ?></td>
  </tr>
  <?php 
  }
  ?>
        </tbody> 

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
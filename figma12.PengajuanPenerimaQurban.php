<?php
require 'functions.php';

if ( isset($_POST["save"])) 
{
  if (save($_POST) > 0 ) 
  {
    echo "<script>
      alert('data berhasil disimpan');
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

    <title>Figma 12</title>
  </head>
  <body style="background-color: #E89A04;">

    <!-- navbar -->
<nav class="navbar navbar-light" style="background-color: #e89A04;">
      <div class="container">
        <ul class="navbar-nav me-a5 mb-6 mb-lg-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </ul>
        <ul class="navbar-nav me-auto mb-6 mb-lg-0">
          <a class="navbar-brand" href="#">
            <img src="menu.png" alt="" width="40" height="24" class="d-inline-block align-text-top">
            <font size="6" face="Times New Roman"><b>Dashboard</b></font>
          </a>
        </ul>
        
        <a class="navbar-brand" href="#">
        <img src="profile.png" alt="" width="80" height="50" class="d-inline-block align-text-top">
      </div>
    </nav>


    <nav class="navbar" style= "background: #F2DE75; " ></nav>
    <div class="container">
    <nav class="navbar card mt-3" style= "background: #F2DE75; " ></nav>
    </div>
    <!-- navbar penutup -->

    <!-- isi -->
    <div class="container">
      <div class="card mt-4" style= "background: #F2DE754A; color: #000000;">
        <div class="card-header text-while text-center" style=" font-family: Yeseva One; ">
          <h2 class="text-center">
            <b>Pengajuan Penerima Qurban</b>
          </h2>
        </div>
        <div class="card-body" style="font-family: Yrsa; font-size: 18px;line-height: 22px;">Masukan max 10 nama kepala keluarga yang berhak mendapatkan qorban :
        </div>
        <div class="card-body";>
           <form action="" method="post" style="font-size: 20px;">
          <table class="table table-bordered table-striped" style= "background: #F2DE75; font-family: Yrsa; text-align: center; font-size: 18px; line-height: 22px;">
            <tr >
              <th >No.</th>
              <th >Nama</th>
            </tr>
            <tr>
              <td style="text-align: center;">1</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama1" id="nama1"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">2</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama2" id="nama2"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">3</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama3" id="nama3"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">4</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama4" id="nama4"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">5</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama5" id="nama5"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">6</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama6" id="nama6"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">7</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama7" id="nama7"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">8</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama8" id="nama8"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">9</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama9" id="nama9"placeholder="Masukan nama...">
              </td>
            </tr>
            <tr>
              <td style="text-align: center;">10</td>
              <td>
                <input style= "background: #F2DE75; "type="text" class="form-control" name="nama10" id="nama10"placeholder="Masukan nama...">
              </td>
            </tr>
          </table>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end"> 
            <button type="submit" name="save"  style="background: #C9B652;">Save</button>
          </div> 
        </form>
        </div>
       </div> 
    </div>
  <nav class="navbar navbar-light" style="background-color: #e89A04; "></nav>
  </body>
</html>



<?php 
include('../masuk/library.php');
$lib = new Library();
$data_siswa = $lib->show();
 
if(isset($_GET['hapus_siswa']))
{
    $id = $_GET['hapus_siswa'];
    $status_hapus = $lib->delete($id);
    if($status_hapus)
    {
        header('Location: index.php');
    }
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
                    <a class="nav-link" href="data_pengguna.php">Pengguna</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Contact</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="../masuk/logout.php">Logout</a>
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
        <div class="card">
            <div class="card-header">
                <h3>Data Pengguna</h3>
            </div>
            <div class="card-body">
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>No Telepon</th>
                        <!-- <th>Alamat</th> -->
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_siswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['username']."</td>";
                        echo "<td>".$row['no_telepon']."</td>";
                        // echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='../masuk/form_edit.php?id=".$row['id']."'>Edit</a>
                        <a class='btn btn-danger' href='../masuk/library.php?hapus_siswa=".$row['id']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
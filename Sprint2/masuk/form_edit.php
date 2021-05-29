<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $data_siswa = $lib->get_by_id($id);
}
else
{
    header('Location: ../halaman/data_pengguna.php');
}
 
if(isset($_POST['tombol_update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $no_telepon = $_POST['no_telepon'];
    // $alamat = $_POST['alamat']; 
    $status_update = $lib->update($id,$username,$no_telepon);
    if($status_update)
    {
        header('Location:../halaman/data_pengguna.php');
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
                    <a class="nav-link" href="../halaman/data_pengguna.php">Pengguna</a>
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
                <h3>Update Data Pengguna</h3>
            </div>
            <div class="card-body ">
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $data_siswa['id']; ?>"/>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-35">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $data_siswa['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telepon" class="col-sm-4 col-form-label">No Telepon</label>
                    <div class="col-sm-35">
                    <input type="text" value="<?php echo $data_siswa['no_telepon']; ?>" name="no_telepon" class="form-control" id="no_telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>
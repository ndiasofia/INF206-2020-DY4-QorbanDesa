<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $username = $_POST['username'];
    $no_telepon = $_POST['no_telepon'];
    // $alamat = $_POST['alamat'];
 
    $add_status = $lib->add_data($username, $no_telepon);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_telepon" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_telepon" class="form-control" id="no_telepon">
                    </div>
                </div>
                <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                </div> -->
                <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                </div>
                </div> -->
            </form>
            </div>
        </div>
    </div>
    </body>
</html>
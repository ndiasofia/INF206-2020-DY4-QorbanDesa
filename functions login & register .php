<?php
//koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "projekrpl");


function daftar($data)
{
	global $conn;

	$nama = strtolower(stripcslashes($data["nama"]));
	$email = $data["email"];
	$no_handphone = $data["no_handphone"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek user name sudah ada atau belum
	$result = mysqli_query($conn, "SELECT nama FROM registerumum WHERE nama = '$nama'");

	if( mysqli_fetch_assoc($result) ) 
	{
		echo "<script>
			alert('NAMA SUDAH TERDAFTAR!! masukan nama lain..')
		</script>";
		return false;
	}

	//cek konfirmasi password
	if ( $password !== $password2) 
	{
		echo "<script>
			alert('Konfirmasi Password Tidak Sesuai!!');
		</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambah user baru ke database
	mysqli_query($conn, "INSERT INTO registerumum VALUES('', '$nama', '$email', '$no_handphone', '$password')");

	return mysqli_affected_rows($conn);
}

function save($data)
{
	global $conn;

	$nama1 = strtolower(stripcslashes($data["nama1"]));
	$nama2 = strtolower(stripcslashes($data["nama2"]));
	$nama3 = strtolower(stripcslashes($data["nama3"]));
	$nama4 = strtolower(stripcslashes($data["nama4"]));
	$nama5 = strtolower(stripcslashes($data["nama5"]));
	$nama6 = strtolower(stripcslashes($data["nama6"]));
	$nama7 = strtolower(stripcslashes($data["nama7"]));
	$nama8 = strtolower(stripcslashes($data["nama8"]));
	$nama9 = strtolower(stripcslashes($data["nama9"]));
	$nama10 = strtolower(stripcslashes($data["nama10"]));


	//tambah user baru ke database
	mysqli_query($conn, "INSERT INTO pengajuanpenerimaqurban VALUES('', '$nama1', '$nama2', '$nama3', '$nama4', '$nama5', '$nama6', '$nama7', '$nama8', '$nama9', '$nama10')");

	return mysqli_affected_rows($conn);
}

?>
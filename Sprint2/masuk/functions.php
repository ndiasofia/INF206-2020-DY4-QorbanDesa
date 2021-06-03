<?php
//koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "qode2");


function register($data)
{
	global $conn;

	$no_hp = strtolower(stripcslashes($data["no_hp"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$nama= strtolower(stripcslashes($data["nama"]));


	// cek user name sudah ada atau belum
	$result = mysqli_query($conn, "SELECT no_hp FROM users WHERE no_hp = '$no_hp'");

	if( mysqli_fetch_assoc($result) ) 
	{
		echo "<script>
			alert('No_telepon SUDAH TERDAFTAR!! masukan no telepon lain..')
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
	mysqli_query($conn, "INSERT INTO users VALUES('', '$no_hp', '$password', '$nama')");

	return mysqli_affected_rows($conn);
	
}
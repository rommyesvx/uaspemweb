<?php
session_start();
require('koneksi.php');
$nidn = $_POST['nidn'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn ='$nidn' AND pass ='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if($cek > 0){
	//$_SESSION['npm'] = $npm;
	//$_SESSION['id'] = $data["Id"];
	//$_SESSION['nama'] = $data["Nama"];
	//$_SESSION['jeniskelamin'] = $data["JenisKelamin"];
	header("location:../index_afterlogin.php");
}else{
	header("location:index.html");
}
?>

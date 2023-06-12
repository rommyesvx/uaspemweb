<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id'];
$matkul = $_POST['matkul'];

if (empty($_POST['matkul'])) {
	?>
	<script language="JavaScript">
		alert('Data Harap Dilengkapi!');
	</script>
	<?php
} else {

	// Query SQL untuk insert data
	$query = "INSERT INTO krs SET id = '$id', IdMataKuliah = '$matkul'";
	mysqli_query($koneksi, $query);

	if ($query) {
		header("location:../krs.php");
	}
}
?>

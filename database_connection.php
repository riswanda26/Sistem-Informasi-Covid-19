<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'covid'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT Kecamatan, Isolasi_Rumah, Isolasi_RS, Discarded, P_Meninggal,  P_RawatRS, P_RawatJalan, S_Total, Dalam_Pantauan, Sembuh, Meninggal, C_Total
		FROM malangkota';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>
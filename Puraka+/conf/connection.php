<?php 

$namaServer = "localhost";
$namaPenguna = "root";
$password = "";
$nama_db = 'puraka';

$koneksi = new mysqli($namaServer, $namaPenguna, $password, $nama_db);
if ($koneksi->connect_error){
	die("Koneksi gagal: " . $koneksi->connect_error. "<br>");
}
//echo "Koneksi sukses. <br>";

 ?>
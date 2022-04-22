
<?php
$servername = "localhost";
$username = "wiwinskr_root";
$password = "Wiwin575757";
$dbname = "wiwinskr_skripsiqr";
$hariskr=date("l");
 $sekarang = date("Y-m-d");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($hariskr != 'sunday'){
$sql = "INSERT INTO absensi (id_pegawai, id_tim, tanggal, id_jadwal, ket_berangkat, ket_pulang) 
		SELECT pegawai.id_pegawai, pegawai.id_tim, '$sekarang', 1 ,'mangkir','mangkir' FROM pegawai WHERE NOT EXISTS (SELECT * FROM absensi WHERE absensi.id_pegawai = pegawai.id_pegawai and absensi.tanggal= '$sekarang');


}
$conn->close();

?>
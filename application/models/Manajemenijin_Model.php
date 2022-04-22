<?php
class Manajemenijin_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getAlldataijinpertim($id_tim){ 
		$query=$this->db->query("SELECT absensi.id_absen, absensi.id_pegawai, pegawai.nama, absensi.id_tim, absensi.tanggal, absensi.jam_berangkat, absensi.ket_berangkat, absensi.jam_pulang, absensi.ket_pulang, pegawai.akses, absensi.alasan_ijin from absensi, pegawai where absensi.id_tim='$id_tim' and absensi.ket_berangkat='ijin' and absensi.ket_pulang='ijin' and absensi.id_pegawai=pegawai.id_pegawai");

	return $query->result_array();}

	function getAlldataijin(){ 
		$query=$this->db->query("SELECT absensi.id_absen, absensi.id_pegawai, pegawai.nama, absensi.id_tim, absensi.tanggal, absensi.jam_berangkat, absensi.ket_berangkat, absensi.jam_pulang, absensi.ket_pulang, pegawai.akses, absensi.alasan_ijin from absensi, pegawai where absensi.ket_berangkat='ijin' and absensi.ket_pulang='ijin' and absensi.id_pegawai=pegawai.id_pegawai");

	return $query->result_array();}


  function Deleteijin($id_absen){
        $hasil=$this->db->query(" DELETE FROM absensi WHERE id_absen='$id_absen'");
        return $hasil;
    }



function Aksiaddijin($id_pegawai,$id_tim,$tanggal,$alasan_ijin){
	    $hsl=$this->db->query("INSERT INTO absensi (id_pegawai,id_jadwal, id_tim, tanggal, alasan_ijin, ket_berangkat, ket_pulang,jam_berangkat,jam_pulang) VALUES ('$id_pegawai','1','$id_tim','$tanggal','$alasan_ijin','ijin','ijin','00:00:00','23:59:59')");
}

	     
        
function Datapegawaipertim($id_tim){ 
		$query=$this->db->query("SELECT * from pegawai where id_tim='$id_tim' ");
		return $query->result_array();

		}
		function Datapegawai(){ 
		$query=$this->db->query("SELECT * from pegawai ");
		return $query->result_array();

		}


function Aksiupdatetim($id_tim,$nama_tim_leader,$id_tim_lama){
       $this->db->query("UPDATE tabel_tim , tbqrcode SET tabel_tim.id_tim='$id_tim', tabel_tim.nama_tim_leader='$nama_tim_leader',tbqrcode.id_tim='$id_tim' WHERE tabel_tim.id_tim = '$id_tim_lama' AND tbqrcode.id_tim = '$id_tim_lama'");
        
       // $this->db->query("UPDATE tbqrcode SET id_tim='$id_tim' WHERE id_tim='$id_timlama'");

    }






}






	

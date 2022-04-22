<?php
class Manajementim_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getAlldatatim(){ 
		$query=$this->db->query("SELECT * from tabel_tim");

	return $query->result_array();}

	function Nama_tim_leaderall(){ 
		$query=$this->db->query("SELECT nama from pegawai where akses='timleader'");

	return $query->result_array();}


function Aksiaddtim($id_tim,$nama_tim_leader){
	    $hsl=$this->db->query("INSERT INTO tabel_tim (id_tim,nama_tim_leader) VALUES ('$id_tim','$nama_tim_leader')");
	       $hsl1=$this->db->query("INSERT INTO tbqrcode (id_tim) VALUES ('$id_tim')");
}

	       function Deletetim($id_tim){
        $hasil=$this->db->query(" DELETE FROM tabel_tim WHERE id_tim='$id_tim'");
        
         $hsl1=$this->db->query("DELETE FROM tbqrcode WHERE id_tim='$id_tim'");
    }
        
function Datatimwhere($id_tim){ 
		$query=$this->db->query("SELECT * from tabel_tim where id_tim='$id_tim' LIMIT  1");
		return $query->result_array();

		}


function Aksiupdatetim($id_tim,$nama_tim_leader,$id_tim_lama){
       $this->db->query("UPDATE tabel_tim , tbqrcode SET tabel_tim.id_tim='$id_tim', tabel_tim.nama_tim_leader='$nama_tim_leader',tbqrcode.id_tim='$id_tim' WHERE tabel_tim.id_tim = '$id_tim_lama' AND tbqrcode.id_tim = '$id_tim_lama'");
        
       // $this->db->query("UPDATE tbqrcode SET id_tim='$id_tim' WHERE id_tim='$id_timlama'");

    }






}






	

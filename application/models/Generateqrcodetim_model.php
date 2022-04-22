<?php
class Generateqrcodetim_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function Showgenerateqrtim($id_tim){ 
		$query=$this->db->query("SELECT tbqrcode.id_tim as id_tim, tbqrcode.qrcode as qrcode, tabel_tim.nama_tim_leader as nama_tim_leader from tbqrcode, tabel_tim where tbqrcode.id_tim='$id_tim' and tabel_tim.id_tim=tbqrcode.id_tim");

	return $query->result_array();
						
		
		
}
	







}

	

<?php
class Resetqrcode_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function Reset($qrcode){ 
		$hsl=$this->db->query("ALTER TABLE tbqrcode DROP column qrcode");

		$hsl=$this->db->query("ALTER TABLE tbqrcode AUTO_INCREMENT= $qrcode,
				ADD qrcode int(10) PRIMARY key AUTO_INCREMENT");
						
		
		
}
	







}

	

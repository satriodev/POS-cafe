<?php
class Datapegawai_Model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function getAlldatapegawai(){ 
		$query=$this->db->query("SELECT * from pegawai");

	return $query->result_array();}


    function getAlldatajadwal(){ 
        $query=$this->db->query("SELECT * from jadwal LIMIT 1");

    return $query->result_array();}


function Datatimall(){ 
        $query=$this->db->query("SELECT id_tim from tabel_tim");

    return $query->result_array();}

	function jumlah_data(){
		return $this->db->get('pegawai')->num_rows();
	}
						
		function Datapegawaiwhere($id_pegawai){ 
		$query=$this->db->query("SELECT * from pegawai where id_pegawai='$id_pegawai' LIMIT  1");
		return $query->result_array();

		}
	

    function Aksiupdatejadwal($id_jadwal,$jam_masuk,$jam_pulang){
        $hasil=$this->db->query("UPDATE jadwal SET jam_masuk='$jam_masuk',
            jam_pulang='$jam_pulang' WHERE id_jadwal='$id_jadwal'");
        return $hasil;
    }


function Aksiupdatepegawaitimleader($id_pegawai,$id_pegawailama,$nama,$password,$id_tim,$akses){
        $hasil=$this->db->query("UPDATE pegawai SET id_pegawai='$id_pegawai',nama='$nama',
        	password='$password',id_tim='$id_tim',
        	password='$password',nama='$nama',
        	akses='$akses' WHERE id_pegawai='$id_pegawailama'");
        return $hasil;
    }

 function Aksiupdate($id_pegawai,$id_pegawailama,$nama,$password,$id_tim,$akses){
        $hasil=$this->db->query("UPDATE pegawai SET id_pegawai='$id_pegawai',nama='$nama',
        	password='$password', id_tim='$id_tim',
        	password='$password', nama='$nama',
        	akses='$akses'  WHERE id_pegawai='$id_pegawailama'");
        return $hasil;
    }

     function Deletepegawai($id_pegawai){
        $hasil=$this->db->query(" DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
        return $hasil;
    }

         function Datatim(){
        $hasil=$this->db->query(" SELECT id_tim FROM tabel_tim")->result_array();
        return $hasil;
    }
function Aksiadd($id_pegawai,$nama,$password,$id_tim,$akses){
	    $hsl=$this->db->query("INSERT INTO pegawai (id_pegawai,password,nama,id_tim,akses) VALUES ('$id_pegawai','$password','$nama','$id_tim','$akses')");
		return $hsl;
        


}




}

	

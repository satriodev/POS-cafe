<?php
class Databiaya_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAlldatabiaya()
    {
        $query = $this->db->query("SELECT * FROM biaya");

        return $query->result_array();
    }

    function Aksiaddbiaya($no_nota, $total_nominal_biaya, $keterangan_biaya, $tgl_biaya)
    {
        $hsl = $this->db->query("INSERT INTO biaya (no_nota,total_nominal_biaya,keterangan_biaya,tgl_biaya) VALUES ('$no_nota','$total_nominal_biaya','$keterangan_biaya','$tgl_biaya')");
        return $hsl;
    }
   

    function Databiayawhere($i)
    {
        $query = $this->db->query("SELECT * FROM biaya WHERE id_biaya=$i");

        return $query->result_array();
    }


    function Aksiupdatebiaya($id_biaya,$no_nota, $total_nominal_biaya, $keterangan_biaya, $tgl_biaya)
    {
        $hasil = $this->db->query("UPDATE biaya SET no_nota='$no_nota',
        	keterangan_biaya='$keterangan_biaya',total_nominal_biaya='$total_nominal_biaya',tgl_biaya='$tgl_biaya'
        	  WHERE id_biaya='$id_biaya'");
        return $hasil;
    }


}

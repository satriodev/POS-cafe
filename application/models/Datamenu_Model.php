<?php
class Datamenu_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAlldatamenu()
    {
        $query = $this->db->query("SELECT * FROM menu");

        return $query->result_array();
    }

    function Datamenuwhere($i)
    {
        $query = $this->db->query("SELECT * FROM menu WHERE id_menu=$i");

        return $query->result_array();
    }
    function Datahargawhere($i)
    {
        $query = $this->db->query("SELECT harga FROM menu WHERE id_menu=$i");

        return $query->row_array();
    }
  

    function Deletemenu($i)
    {
        $query = $this->db->query("DELETE FROM menu WHERE id_menu=$i");
        $query = $this->db->query("DELETE FROM kebutuhan_bahan_baku WHERE id_menu=$i");
    }


    function Aksiupdatemenu($id_menu, $nama_menu, $harga)
    {
        $hasil = $this->db->query("UPDATE menu SET nama_menu='$nama_menu',
        	harga='$harga'
        	  WHERE id_menu='$id_menu'");
        return $hasil;
    }

    function Aksiaddmenu($nama_menu, $harga)
    {
        $hsl = $this->db->query("INSERT INTO menu (nama_menu,harga) VALUES ('$nama_menu','$harga')");
        return $hsl;
    }
}

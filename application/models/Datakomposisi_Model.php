<?php
class Datakomposisi_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAlldatamenu()
    {
        $query = $this->db->query("SELECT * FROM menu WHERE NOT EXISTS (SELECT * FROM kebutuhan_bahan_baku WHERE kebutuhan_bahan_baku.id_menu = menu.id_menu)");

        return $query->result_array();
    }

    public function Simpanbanyak($data)
    {
        return $this->db->insert_batch('kebutuhan_bahan_baku', $data);
    }
    function getAlldatabahanbaku()
    {
        $query = $this->db->query("SELECT * FROM bahan_baku");

        return $query->result_array();
    }

    function Datamenuwhere($i)
    {
        $query = $this->db->query("SELECT * FROM menu WHERE id_menu=$i");

        return $query->result_array();
    }

    function Viewdatakomposisi($i)
    {
        $query = $this->db->query("SELECT kebutuhan_bahan_baku.id_kebutuhan,kebutuhan_bahan_baku.id_menu , menu.nama_menu, bahan_baku.nama_bahan_baku , kebutuhan_bahan_baku.jumlah_kebutuhan FROM 
        kebutuhan_bahan_baku,menu,bahan_baku WHERE kebutuhan_bahan_baku.id_menu=menu.id_menu 
        and kebutuhan_bahan_baku.id_bahan_baku=bahan_baku.id_bahan_baku and kebutuhan_bahan_baku.id_menu=$i");
        return $query->result_array();
    }
    function Aksiupdatemenu($id_menu, $nama_menu, $harga)
    {
        $hasil = $this->db->query("UPDATE menu SET nama_menu='$nama_menu',
        	harga='$harga'
        	  WHERE id_menu='$id_menu'");
        return $hasil;
    }
    function Datakomposisiwhere($i)
    {
        $query = $this->db->query("SELECT kebutuhan_bahan_baku.id_kebutuhan ,kebutuhan_bahan_baku.id_menu,kebutuhan_bahan_baku.id_bahan_baku, menu.nama_menu, bahan_baku.nama_bahan_baku , kebutuhan_bahan_baku.jumlah_kebutuhan FROM 
        kebutuhan_bahan_baku,menu,bahan_baku WHERE kebutuhan_bahan_baku.id_menu=menu.id_menu 
        and kebutuhan_bahan_baku.id_bahan_baku=bahan_baku.id_bahan_baku and kebutuhan_bahan_baku.id_kebutuhan=$i");

        return $query->result_array();
    }


    function Aksiupdatekomposisi($id_kebutuhan, $id_menu, $id_bahan_baku, $jumlah_kebutuhan)
    {
        $hasil = $this->db->query("UPDATE kebutuhan_bahan_baku SET id_menu='$id_menu', id_bahan_baku='$id_bahan_baku',
        	jumlah_kebutuhan='$jumlah_kebutuhan'
        	  WHERE id_kebutuhan='$id_kebutuhan'");
    }
    function getAlldatabahanbakukomposisi()
    {
        $query = $this->db->query("SELECT id_bahan_baku as idbahanbaku, nama_bahan_baku FROM bahan_baku");

        return $query->result_array();
    }

    function getAlldatamenukomposisi()
    {
        $query = $this->db->query("SELECT id_menu as idmenu, nama_menu FROM menu");

        return $query->result_array();
    }
    function Deletekomposisi($i)
    {
        $query = $this->db->query("DELETE FROM kebutuhan_bahan_baku where id_kebutuhan=$i");
    }
}

<?php
class Penjualan_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getidtrx()
    {
        $query = $this->db->query("SELECT id_trx FROM trx ORDER BY id_trx desc limit 1 ");

        return $query->result_array();
    }

    public function Simpanbanyak($data)
    {
        return $this->db->insert_batch('detail_trx', $data);
        return $this->db->affected_rows();
    }
    public function getwhereidtrx($idtrx)
    {
        $query = $this->db->query("SELECT detail_trx.id_trx,detail_trx.id_menu,menu.nama_menu,detail_trx.harga,detail_trx.jumlah,detail_trx.totalbayar FROM detail_trx inner join menu on menu.id_menu=detail_trx.id_menu where detail_trx.id_trx='$idtrx'");

        return $query->result_array();
    }

    public function Simpan($data)
    {
        $this->db->insert('detail_trx',$data);
        return $this->db->affected_rows();

    }
    
    public function aksiaddtrx($id_trx, $nama)
    {
        $hsl = $this->db->query("INSERT INTO trx (id_trx,tgl_waktu,kasir_user) VALUES ('$id_trx',NOW(),'$nama')");
        return $hsl;
    }
    public function aksitambahtrx($id_trx,$totalbayar,$kasir_user)
    {
        $hsl = $this->db->query("INSERT INTO trx (id_trx,tgl_waktu,jumlah_bayar,kasir_user) VALUES ('$id_trx',NOW(),'$totalbayar','$kasir_user')");
        return $this->db->affected_rows();
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

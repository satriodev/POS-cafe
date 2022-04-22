<?php
class Databahanbaku_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAlldatabahanbaku()
    {
        $query = $this->db->query("SELECT * FROM bahan_baku");

        return $query->result_array();
    }

    function Databahanbakuwhere($i)
    {
        $query = $this->db->query("SELECT * FROM bahan_baku WHERE id_bahan_baku=$i");

        return $query->result_array();
    }

    function Deletebahanbaku($i)
    {
        $query = $this->db->query("DELETE FROM bahan_baku WHERE id_bahan_baku=$i");
    }


    function Aksiupdatebahanbaku($id_bahan_baku, $nama_bahan_baku, $harga, $jumlah, $satuan)
    {
        $hasil = $this->db->query("UPDATE bahan_baku SET nama_bahan_baku='$nama_bahan_baku',
        	harga='$harga', jumlah='$jumlah',
        	satuan='$satuan'  WHERE id_bahan_baku='$id_bahan_baku'");
        return $hasil;
    }

    function Aksiaddbahanbaku($nama_bahan_baku, $harga, $jumlah, $satuan)
    {
        $hsl = $this->db->query("INSERT INTO bahan_baku (nama_bahan_baku,harga,jumlah,satuan) VALUES ('$nama_bahan_baku','$harga','$jumlah','$satuan')");
        return $hsl;
    }
}

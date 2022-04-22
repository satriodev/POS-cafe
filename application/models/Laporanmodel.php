<?php
class Laporanmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    // function Gettransaksiperiodik($tgl1,$tgl2)
    // {
    //     $query = $this->db->query("SELECT * FROM trx where tgl_waktu between '$tgl1 00:00:00' and '$tgl2 23:59:59' ");
    //     return $query->result_array();
    // }
    function Gettransaksiperiodik($tgl1,$tgl2)
    {
        $query = $this->db->query("SELECT detail_trx.id_trx, menu.nama_menu, detail_trx.harga, 
        detail_trx.jumlah, detail_trx.diskonmenu, detail_trx.totalbayar, 
        trx.jumlah_bayar, trx.tgl_waktu, trx.kasir_user from detail_trx inner join menu on 
        detail_trx.id_menu = menu.id_menu 
        inner join trx on detail_trx.id_trx=trx.id_trx where trx.tgl_waktu between '$tgl1 00:00:00' 
        and '$tgl2 23:59:59'  ");
        return $query->result_array();
    }
    function Getjumlahkebutuhanperiodik($tgl1,$tgl2)
    {
        $query = $this->db->query("SELECT bahan_baku_keluar.id_trx,bahan_baku_keluar.id_detail_trx,
        bahan_baku_keluar.id_bahan_baku, bahan_baku.nama_bahan_baku, bahan_baku_keluar.harga_bahan_baku, 
        SUM(bahan_baku_keluar.jumlah_keluar) as jumlah, SUM(bahan_baku_keluar.cost_total_bahan_baku) as 
        cost_total
        FROM bahan_baku_keluar inner join bahan_baku on bahan_baku_keluar.id_bahan_baku=bahan_baku.id_bahan_baku where bahan_baku_keluar.tanggal 
        between '$tgl1 00:00:00' and '$tgl2 23:59:59'
        GROUP BY bahan_baku_keluar.id_bahan_baku , bahan_baku_keluar.harga_bahan_baku");
        return $query->result_array();
    }



    function Getbiaya($tgl1,$tgl2)
    {
        $query = $this->db->query("SELECT *
        FROM biaya where tgl_biaya 
        between '$tgl1' and '$tgl2'
       ");
        return $query->result_array();
    }
}
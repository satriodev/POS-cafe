<?php


class Tambahpenjualan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Penjualan_Model');
        $this->load->model('Datamenu_Model');
        $this->load->model('Datakomposisi_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
    }
    public function index_post()
    {
        
        $data = array(
            'id'           => $this->post('id'),
            'nama'          => $this->post('nama'),
            'nomor'    => $this->post('nomor'));
$insert = $this->db->insert('telepon', $data);
if ($insert) {
    $this->response($data, 200);
} else {
    $this->response(array('status' => 'fail', 502));
}
}
       
    
        
    }

   
}

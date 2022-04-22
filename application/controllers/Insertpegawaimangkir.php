<?php


class Insertpegawaimangkir extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Generateqrcodetim_model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
    }

    public function index()
    {
        $sekarang = date("Y-m-d");
        $this->load->model('Manajemenabsensi_Model');
        $this->Manajemenabsensi_Model->Insertpegawaimangkir($sekarang);
    }
}

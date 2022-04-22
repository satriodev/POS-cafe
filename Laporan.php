<?php


class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporanmodel');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
    }

    public function index()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin') {

            $this->load->view('template/Header');
            $this->load->view('Laporan');
            $this->load->view('template/Footer');
        } else {

            redirect('Home/logout', 'refresh');
        }
    }




    public function Getlaporan()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin') {




            $tanggal1 = $this->input->post('tanggal1');
            $tanggal2 = $this->input->post('tanggal2');

            $data['datalaporan'] = $this->Laporanmodel->Getlaporan($tanggal1, $tanggal2);
            $data['datamangkir'] = $this->Laporanmodel->Getmangkir($tanggal1, $tanggal2);
            /*$data['datatanggal'][] = (object) array(
                'tanggal1' => $tanggal1,
                'tanggal2' => $tanggal2
            );*/
            $data['tanggal1'] = $tanggal1;
            $data['tanggal2'] = $tanggal2;
            // $data['datatanggal'] = ["tanggal1" => $tanggal1, "tanggal2" => $tanggal2];


            $this->load->view('template/Header');
            $this->load->view('Viewlaporan', $data);
            $this->load->view('template/Footer');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }
}

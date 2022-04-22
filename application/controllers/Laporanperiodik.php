<?php


class Laporanperiodik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Laporanmodel');
     
        $this->load->helper('url');
    }

    public function index()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') {

            $this->load->view('template/Header');
            $this->load->view('Laporanpenjualanperiodik');
            $this->load->view('template/Footer');
        } else {

            redirect('Home/logout', 'refresh');
        }
    }

    public function Getlaporanperiodik()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') {
            $tgl11=$this->input->post('tgl1');
            $tgl1 = date("Y-m-d", strtotime($tgl11)); 
            $tgl22=$this->input->post('tgl2');
            $tgl2 = date("Y-m-d", strtotime($tgl22));
            // echo $tgl1;
            // echo '<br>';
            // echo $tgl2;

            $data['transaksi']=$this->Laporanmodel->Gettransaksiperiodik($tgl1,$tgl2);
            //$data['dttransaksi']=$this->Laporanmodel->Getdttransaksiperiodik($tgl1,$tgl2);
            $data['kebutuhan']=$this->Laporanmodel->Getjumlahkebutuhanperiodik($tgl1,$tgl2);
            $data['databiaya']=$this->Laporanmodel->Getbiaya($tgl1,$tgl2);
            $data['tanggal1']=$tgl1;
            $data['tanggal2']=$tgl2;
            $this->load->view('template/Header');
            $this->load->view('Getlaporanperiodik',$data);
            $this->load->view('template/Footertable');
        } else {

            redirect('Home/logout', 'refresh');
        }
    }


}
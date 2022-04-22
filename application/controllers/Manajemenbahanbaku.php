<?php


class Manajemenbahanbaku extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Databahanbaku_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');}
            if ($this->session->userdata('akses') != 'superadmin') {
                redirect('Home/logout', 'refresh');}
            
    }


    public function index()
    {
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses')== 'superadmin') {




            $data['databahanbaku'] = $this->Databahanbaku_Model->getAlldatabahanbaku();
            $this->load->view('template/Header');
            $this->load->view('Manajemenbahanbaku', $data);
            $this->load->view('template/Footertable');
        }
    }



    public function Viewupdatebahanbaku($id_bahan_baku)
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {



            $data['databahanbaku'] = $this->Databahanbaku_Model->Databahanbakuwhere($id_bahan_baku);


            $this->load->view('template/Header');
            $this->load->view('Viewupdatebahanbaku', $data);
            $this->load->view('template/Footer');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }


    public function Aksiupdatebahanbaku()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {




            echo $id_bahan_baku = $this->input->post('id_bahan_baku');
            echo     $nama_bahan_baku = $this->input->post('nama_bahan_baku');
            echo  $harga = $this->input->post('harga');
            echo $jumlah = $this->input->post('jumlah');
            echo $satuan = $this->input->post('satuan');


            $this->Databahanbaku_Model->Aksiupdatebahanbaku($id_bahan_baku, $nama_bahan_baku, $harga, $jumlah, $satuan);
            $this->session->set_flashdata('flash', '1');


            redirect('Manajemenbahanbaku');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }

    public function Deletebahanbaku($id_bahan_baku)

    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {
            $this->Databahanbaku_Model->Deletebahanbaku($id_bahan_baku);
            $this->session->set_flashdata('flash', '2');

            redirect('Manajemenbahanbaku');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }
    public function Viewaddbahanbaku()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {


            $this->load->view('template/Header');
            $this->load->view('Viewaddbahanbaku');
            $this->load->view('template/Footer');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }



    public function Aksiaddbahanbaku()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {





            $nama_bahan_baku = $this->input->post('nama_bahan_baku');
            $harga = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');
            $satuan = $this->input->post('satuan');

            $this->session->set_flashdata('flash', '3');




            $this->Databahanbaku_Model->Aksiaddbahanbaku($nama_bahan_baku, $harga, $jumlah, $satuan);


            redirect('Manajemenbahanbaku');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }
}

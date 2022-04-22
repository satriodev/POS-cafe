<?php


class Viewkomposisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Datakomposisi_Model');
        $this->load->model('Datamenu_Model');
        $this->load->model('Databahanbaku_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
    }
    public function index()
    {
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' or 'timleader') {



            $this->load->model('Datamenu_Model');
            $data['datamenu'] = $this->Datamenu_Model->getAlldatamenu();


            $this->load->view('template/Header');
            $this->load->view('Viewkomposisi', $data);
            $this->load->view('template/Footer');
        }
    }

    public function Viewdatakomposisi()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' || $this->session->userdata('akses') == 'superadmin') {

            $id_menu = $this->session->flashdata('in');
            if ($id_menu != null) {

                $data['datakomposisi'] = $this->Datakomposisi_Model->Viewdatakomposisi($id_menu);


                $this->load->view('template/Header');
                $this->load->view('Viewdatakomposisi', $data);
                $this->load->view('template/Footertable');
            } else {
                $id_menu = $this->input->post('id_menu');
                $data['datakomposisi'] = $this->Datakomposisi_Model->Viewdatakomposisi($id_menu);


                $this->load->view('template/Header');
                $this->load->view('Viewdatakomposisi', $data);
                $this->load->view('template/Footertable');
            }
        } else {
            redirect('Home/logout', 'refresh');
        }
    }


    public function Viewupdatekomposisi($id_kebutuhan)
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {

            $data['datamenu'] = $this->Datakomposisi_Model->getAlldatamenukomposisi();
            $data['databahanbaku'] = $this->Datakomposisi_Model->getAlldatabahanbakukomposisi();

            $data['datakomposisi'] = $this->Datakomposisi_Model->Datakomposisiwhere($id_kebutuhan);

            // echo '<pre>' . var_export($data, true) . '</pre>';
            $this->load->view('template/Header');
            $this->load->view('Viewupdatekomposisi', $data);
            $this->load->view('template/Footer');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }



    public function Aksiupdatekomposisi()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {




            $id_kebutuhan = $this->input->post('id_kebutuhan');
            $id_menu = $this->input->post('id_menu');
            $id_bahan_baku = $this->input->post('id_bahan_baku');
            $jumlah_kebutuhan = $this->input->post('jumlah_kebutuhan');
            echo $id_kebutuhan, $id_menu,  $id_bahan_baku, $jumlah_kebutuhan;

            $this->Datakomposisi_Model->Aksiupdatekomposisi($id_kebutuhan, $id_menu, $id_bahan_baku, $jumlah_kebutuhan);
            $this->session->set_flashdata('flash', '1');

            $this->session->set_flashdata('in', $id_menu);
            redirect('Viewkomposisi/Viewdatakomposisi/');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }

    public function Deletekomposisi($i, $m)

    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'superadmin') {
            $this->Datakomposisi_Model->Deletekomposisi($i);
            $this->session->set_flashdata('flash', '2');
            $this->session->set_flashdata('in', $m);

            redirect('Viewkomposisi/Viewdatakomposisi/');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }
   
}

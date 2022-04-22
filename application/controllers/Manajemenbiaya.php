<?php


class Manajemenbiaya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Databiaya_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
        if ($this->session->userdata('akses') != 'superadmin'){
            redirect('Home/logout', 'refresh');
        }
    }
    public function index()
    {
       

            $data['databiaya'] = $this->Databiaya_Model->getAlldatabiaya();

            $this->load->view('template/Header');
            $this->load->view('Manajemendatabiaya', $data);
            $this->load->view('template/Footertable');
       
    }


    public function Viewaddbiaya()
    {

   


            $this->load->view('template/Header');
            $this->load->view('Viewaddbiaya');
            $this->load->view('template/Footer');
      
        
    }



    public function Aksiaddbiaya()
    {



            $no_nota = $this->input->post('no_nota');
            $total_nominal_biaya = $this->input->post('total_nominal_biaya');
            $keterangan_biaya = $this->input->post('keterangan_biaya');
            $tgl_biaya1 = $this->input->post('tgl_biaya');
            $tgl_biaya = date("Y-m-d", strtotime($tgl_biaya1));
           
        echo $tgl_biaya;

            $this->session->set_flashdata('flash', '3');




            $this->Databiaya_Model->Aksiaddbiaya($no_nota, $total_nominal_biaya, $keterangan_biaya, $tgl_biaya);

        
            redirect('Manajemendatamenu');
         
    }




    public function Viewupdatebiaya($id_biaya)
    {




            $data['databiaya'] = $this->Databiaya_Model->Databiayawhere($id_biaya);


            $this->load->view('template/Header');
            $this->load->view('Viewupdatebiaya', $data);
            $this->load->view('template/Footer');
     
    }


    public function Aksiupdatebiaya()
    {

        $id_biaya = $this->input->post('id_biaya');
        $no_nota = $this->input->post('no_nota');
        $total_nominal_biaya = $this->input->post('total_nominal_biaya');
        $keterangan_biaya = $this->input->post('keterangan_biaya');
        $tgl_biaya1 = $this->input->post('tgl_biaya');
        $tgl_biaya = date("Y-m-d", strtotime($tgl_biaya1));



            $this->Databiaya_Model->Aksiupdatebiaya($id_biaya,$no_nota, $total_nominal_biaya, $keterangan_biaya, $tgl_biaya);
            $this->session->set_flashdata('flash', '1');


            redirect('Manajemenbiaya');
      
    }

    public function Deletemenu($id_menu)

    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin') {
            $this->Datamenu_Model->Deletemenu($id_menu);
            $this->session->set_flashdata('flash', '2');

            redirect('Manajemendatamenu');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }
    



   
}

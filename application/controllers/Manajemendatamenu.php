<?php


class Manajemendatamenu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Datamenu_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
        if ($this->session->userdata('akses') != 'superadmin'){
            redirect('Home/logout', 'refresh');
        }
    }
    public function index()
    {
      




            $data['datamenu'] = $this->Datamenu_Model->getAlldatamenu();

            $this->load->view('template/Header');
            $this->load->view('Manajemendatamenu', $data);
            $this->load->view('template/Footertable');
        
    }



    public function Viewupdatemenu($id_menu)
    {

      



            $data['datamenu'] = $this->Datamenu_Model->Datamenuwhere($id_menu);


            $this->load->view('template/Header');
            $this->load->view('Viewupdatemenu', $data);
            $this->load->view('template/Footer');
      
    }


    public function Aksiupdatemenu()
    {

    



            echo $id_menu = $this->input->post('id_menu');
            echo     $nama_menu = $this->input->post('nama_menu');
            echo  $harga = $this->input->post('harga');



            $this->Datamenu_Model->Aksiupdatemenu($id_menu, $nama_menu, $harga);
            $this->session->set_flashdata('flash', '1');


         
    }

    public function Deletemenu($id_menu)

    {

      
            $this->Datamenu_Model->Deletemenu($id_menu);
            $this->session->set_flashdata('flash', '2');

            redirect('Manajemendatamenu');
    
    }
    public function Viewaddmenu()
    {

      


            $this->load->view('template/Header');
            $this->load->view('Viewaddmenu');
            $this->load->view('template/Footer');
      
    }



    public function Aksiaddmenu()
    {

       





            $nama_menu = $this->input->post('nama_menu');
            $harga = $this->input->post('harga');


            $this->session->set_flashdata('flash', '3');




            $this->Datamenu_Model->Aksiaddmenu($nama_menu, $harga);


            redirect('Manajemendatamenu');
      
    }
}

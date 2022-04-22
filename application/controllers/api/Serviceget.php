<?php

require APPPATH . 'libraries/REST_Controller.php';

class Serviceget extends REST_Controller
{

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_get()
    {

        $this->load->model('Datamenu_Model', 'ikhi');

        $id_menu = $this->get('id_menu');

        $data['datamenu'] = $this->ikhi->Datamenuwhere($id_menu);
        
       
         if ($data['datamenu']==null) {
             //$data = $this->db->get_where("menu", ['id_menu' => $id])->row_array();
        // } else {
        //     $data = $this->db->get("menu")->result();
    $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );    
        
     }
     else{
         
          $this->response($data, REST_Controller::HTTP_OK);
     }

        // $this->response($data, REST_Controller::HTTP_OK);
    }


    public function tambah_post()
    {
        $data_menu[]= $this->input->post('data_menu');
        $datamenu=json_encode($data_menu);  //converting to json
        $data_trx[]= $this->input->post('data_trx');
        $datatrx=json_encode($data_trx);  


        
            $data['datamenu']=$datamenu;
            //$ardatatrx=$data['datatrx']=$datatrx;
            $inserted=$this->db->insert('detail_trx',$data); //insert query
            $this->response($data, REST_Controller::HTTP_OK);
    }
    /**
     * Get All Data from this method.
     *
     * 
     */
}

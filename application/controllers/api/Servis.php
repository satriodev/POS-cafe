<?php

require APPPATH . 'libraries/REST_Controller.php';

class Servis extends REST_Controller
{

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
  
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_get()
    {
        
        
        $this->response("1", REST_Controller::HTTP_OK);
        // if (!empty($id)) {
        //     $data = $this->db->get_where("menu", ['id_menu' => $id])->row_array();
        // } else {
        //     $data = $this->db->get("menu")->result();
        // }

        // $this->response($data, REST_Controller::HTTP_OK);
    }


    
    /**
     * Get All Data from this method.
     *
     * 
     */
}

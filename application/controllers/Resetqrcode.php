<?php 


class Resetqrcode extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model('Resetqrcode_model');
//$this->load->model('DataPenduduk_Model');
$this->load->helper('url');

}


    public function index()

       {

        if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
         
         $this->load->view('template/Header');
        $this->load->view('Resetqrcode');
        $this->load->view('template/Footer');
      
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
}






 
   
     public function Inputreset()

         {

        if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
         
         $qrcode=$this->input->post('qrcode');
      $this->Resetqrcode_model->Reset($qrcode);

      redirect('Home/Logout');
      
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
}




  

public function QRcode(){
$this->load->library('ciqrcode');
          $qrcode=$this->session->userdata('qrcode');
        //$kd=$this->input->post('kd');
        $data['qrcode']=$qrcode;
QRcode::png(
            $qrcode,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 5,
            $margin = 2);

}




















}
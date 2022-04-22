<?php 


class Generateqrcodetim extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model('Generateqrcodetim_model');
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
        $this->load->view('Generateqrcodetim');
        $this->load->view('template/Footer');


      }
    
    
    else{
        
        redirect('Home/logout','refresh');
     

        }
    } 
    public function QRcode($qrcode){
$this->load->library('ciqrcode');
         
        //$kd=$this->input->post('kd');
        
QRcode::png(
            $qrcode,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 5,
            $margin = 2);

}

     public function openqrtim()
      {

         if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    
  else if ( $this->session->userdata('akses')=='admin')
          {  
              $id_tim=$this->input->post('id_tim');
              $data['qrcodetim'] = $this->Generateqrcodetim_model->Showgenerateqrtim($id_tim);


              $this->load->view('template/Header');
              $this->load->view('Generateqrcodetimshow',$data);
              $this->load->view('template/Footer');


      }
    
    else{

     
       

      }


      }



}
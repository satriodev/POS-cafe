<?php 


class Updatejadwal extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model('Datapegawai_Model');
//$this->load->model('DataPenduduk_Model');
$this->load->helper('url');

}

  public function index()
    {


 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');
        }
    
    else if ( $this->session->userdata('akses')=='admin')
          { 
        
         $data['datajadwal'] = $this->Datapegawai_Model->getAlldatajadwal();

  
        $this->load->view('template/Header');
        $this->load->view('Viewjadwal',$data);
        $this->load->view('template/Footertable');


      }
    
    else{
  
redirect('Home/logout','refresh');
      
     

    }
 }

  

     public function Aksiupdatejadwal()
    {

        if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 

           
        
    
     $id_jadwal=$this->input->post('id_jadwal');
      $jam_masuk=$this->input->post('jam_masuk');
         $jam_pulang=$this->input->post('jam_pulang');
                


    $this->Datapegawai_Model->Aksiupdatejadwal($id_jadwal,$jam_masuk,$jam_pulang);


 redirect('Updatejadwal');

      
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
}


  
     

  

     public function Deletepegawai($id_pegawai)

       {

        if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
          $this->load->model('Datapegawai_Model');
        $this->Datapegawai_Model->Deletepegawai($id_pegawai);

        redirect('Manajemenpegawai');
      
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
}






  



      public function Viewadd()
    {

       if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

        }
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
          
    $this->load->model('Datapegawai_Model');
     $data['datatim'] = $this->Datapegawai_Model->Datatimall();

      $this->load->view('template/Header');
      $this->load->view('Viewadd',$data);
      $this->load->view('template/Footer');
      }
    
    else{
      redirect('Home/logout','refresh');
  

    }


  }



 public function Aksiadd()
    {

       if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

        }
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
          
    $this->load->model('Datapegawai_Model');
    
     $id_pegawai=$this->input->post('id_pegawai');
    
         $nama=$this->input->post('nama');
                $password=$this->input->post('password');
                $id_tim=$this->input->post('id_tim');
                $akses=$this->input->post('akses');


     



    $this->Datapegawai_Model->Aksiadd($id_pegawai,$nama,$password,$id_tim,$akses);

    
    redirect('Manajemenpegawai');
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
  }










}
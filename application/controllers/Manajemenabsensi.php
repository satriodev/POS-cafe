<?php 


class Manajemenabsensi extends CI_Controller {

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
    
    else if ( $this->session->userdata('akses')=='admin' or 'timleader')
          { 
            if ( $this->session->userdata('akses')=='timleader')
         
        {
            $id_tim=$this->session->userdata('id_tim');
      
       
           $this->load->model('Manajemenabsensi_Model');
         $data['dataabsensi'] = $this->Manajemenabsensi_Model->dataabsensipertim($id_tim);


        $this->load->view('template/Header');
        $this->load->view('Manajemenabsensitimleader',$data);
        $this->load->view('template/Footertable');
      }
      else if ( $this->session->userdata('akses')=='admin')
      {
             
      
       
           $this->load->model('Manajemenabsensi_Model');
         $data['dataabsensi'] = $this->Manajemenabsensi_Model->getAlldataabsensi();

  
        $this->load->view('template/Header');
        $this->load->view('Manajemenabsensi',$data);
        $this->load->view('template/Footertable');
      }

  		}
    
    else{
  
redirect('Home/logout','refresh');
    	
     

    }
 }




 public function Deleteijin($id_absen)

       {

        if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin'or 'timleader')
          { 
          $this->load->model('Manajemenijin_Model');
        $this->Manajemenijin_Model->Deleteijin($id_absen);

        redirect('Manajemenijin');
      
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
}

  public function Viewaddijin()
    {

       if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

        }
    

    else if ( $this->session->userdata('akses')=='admin' or 'timleader')
          { 
               if ( $this->session->userdata('akses')=='timleader')
               {
           $id_tim=$this->session->userdata('id_tim');
    $this->load->model('Manajemenijin_Model');

     $data['datapegawaipertim'] = $this->Manajemenijin_Model->Datapegawaipertim($id_tim);

      $this->load->view('template/Header');
      $this->load->view('Viewaddijin',$data);
      $this->load->view('template/Footer');

    }


    else if ( $this->session->userdata('akses')=='admin')
{

           $id_tim=$this->session->userdata('id_tim');
    $this->load->model('Manajemenijin_Model');

     $data['datapegawaipertim'] = $this->Manajemenijin_Model->Datapegawai();

      $this->load->view('template/Header');
      $this->load->view('Viewaddijin',$data);
      $this->load->view('template/Footer');

}


      }
    
    else{
      redirect('Home/logout','refresh');
  

    }


  }





  public function Aksiaddijin()
    {

       if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

        }
    

    else if ( $this->session->userdata('akses')=='admin' or 'timleader')
          { 
          
    $this->load->model('Manajemenijin_Model');
    
     $id_pegawai=$this->input->post('id_pegawai');
    
         $id_tim=$this->input->post('id_tim');
                $tanggal=$this->input->post('tanggal');
                $alasan_ijin=$this->input->post('alasan_ijin');
                
  $this->Manajemenijin_Model->Aksiaddijin($id_pegawai,$id_tim,$tanggal,$alasan_ijin);

    
    redirect('Manajemenijin');
      }
    
    else{
      redirect('Home/logout','refresh');
  


     

    }
  }



   

     public function Aksiupdate()
    {

    		if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 

           
		    	$this->load->model('Datapegawai_Model');
		
		echo $id_pegawai=$this->input->post('id_pegawai');
		 echo $id_pegawailama=$this->input->post('id_pegawailama');
			echo	 $nama=$this->input->post('nama');
              echo  $password=$this->input->post('password');
               echo $id_tim=$this->input->post('id_tim');
                echo$akses=$this->input->post('akses');


		$this->Datapegawai_Model->Aksiupdate($id_pegawai,$id_pegawailama,$nama,$password,$id_tim,$akses);

		
		redirect('Manajemenpegawai');
      
  		}
    
    else{
    	redirect('Home/logout','refresh');
  


     

    }
}


	
     

  

    






  



    


 

     



	










}
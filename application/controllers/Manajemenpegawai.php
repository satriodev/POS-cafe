<?php 


class Manajemenpegawai extends CI_Controller {

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
           $this->load->model('Datapegawai_Model');
         $data['datapegawai'] = $this->Datapegawai_Model->getAlldatapegawai();

  
        $this->load->view('template/Header');
        $this->load->view('Manajemenpegawai',$data);
        $this->load->view('template/Footertable');


  		}
    
    else{
  
redirect('Home/logout','refresh');
    	
     

    }
 }

      public function Viewupdate($id_pegawai)
    {

    	 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	$data = array('id_pegawai' => $id_pegawai);
		    	
		$this->load->model('Datapegawai_Model');
		 $data['datapegawai'] = $this->Datapegawai_Model->Datapegawaiwhere($id_pegawai);
      $data['datatim'] = $this->Datapegawai_Model->Datatimall();

      //echo var_dump($data);
      $this->load->view('template/Header');
       $this->load->view('Viewupdatepegawai',$data);
    $this->load->view('template/Footer');
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
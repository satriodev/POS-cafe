<?php


class Penjualan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Penjualan_Model');
        $this->load->model('Datamenu_Model');
        $this->load->model('Datakomposisi_Model');
        
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
    }
    public function index()
    {

        $akses=$this->session->userdata('akses');
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } 
       else if ($akses == 'admin' ||$akses == 'timleader') {

        $id_trx=[];


            $data['idtrx'] = $this->Penjualan_Model->getidtrx();
            foreach ($data['idtrx'] as $i) :

                $id_trx = $i['id_trx'];
            endforeach;
            //echo $id_trx;
            //$idtrx = substr($id_trx, 3, 9);
            $id_trx++;
            if($this->Penjualan_Model->getidtrx()==null || $this->Penjualan_Model->getidtrx()==0)
            {
                $id_trx="TRX000000001";
            }
            $data['idtrx'] = $id_trx;
     
            // echo '<pre>' . var_export($data, true) . '</pre>';
            $data['datamenu'] = $this->Datakomposisi_Model->getAlldatamenukomposisi();

            $this->load->view('template/Header');
            $this->load->view('Penjualan', $data);
            $this->load->view('template/Footer');
        }
        else { redirect('Home/logout', 'refresh');
            }
    }

    public function Printnota($idtrx){
        $data['datatrx']=$this->Penjualan_Model->getwhereidtrx($idtrx);
        $data['idtrx']=$idtrx;
        $this->load->view('Nota',$data);
}



    public function Aksiaddpenjualan()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin') {


            $data['datamenu'] = $this->Datakomposisi_Model->getAlldatamenukomposisi();

            $id_trx = $this->input->post('id_trx');

            $id_menu = $this->input->post('id_menu');
            $jumlah = $this->input->post('jumlah');




            $data = array();
            $index = 0;
            foreach ($id_menu as $i) { // Kita buat perulangan berdasarkan nis sampai data terakhir
                $query = $this->Datamenu_Model->Datahargawhere($id_menu[$index]);
                if (isset($query)) {
                    $harga[$index] = $query['harga'];
                    array_push($data, array(
                        'id_trx' => $id_trx,
                        'id_menu' => $id_menu[$index],
                        'jumlah' => $jumlah[$index],
                        'harga' => $harga[$index],  // Ambil dan set data nama sesuai index array dari $index

                    ));
                }

                $index++;
            }
            $sql = $this->Penjualan_Model->Simpanbanyak($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)
            $nama = $this->session->userdata('nama');
            $data['datatrx'] = $this->Penjualan_Model->aksiaddtrx($id_trx, $nama);






            $this->session->set_flashdata('flash', '3');


            redirect('Penjualan');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }

   
}

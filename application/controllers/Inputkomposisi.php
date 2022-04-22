<?php


class Inputkomposisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Datakomposisi_Model');
        $this->load->model('Datamenu_Model');
        //$this->load->model('DataPenduduk_Model');
        $this->load->helper('url');
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        }
    }
    public function index()
    {
        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' or $this->session->userdata('akses') == 'superadmin') {




            $data['datamenu'] = $this->Datakomposisi_Model->getAlldatamenukomposisi();
            $data['databahanbaku'] = $this->Datakomposisi_Model->getAlldatabahanbaku();

            $this->load->view('template/Header');
            $this->load->view('Inputkomposisi', $data);
            $this->load->view('template/Footer');
        }
    }

    public function Aksiaddkomposisi()
    {

        if ($this->session->userdata('akses') == null) {
            redirect('Home/logout', 'refresh');
        } else if ($this->session->userdata('akses') == 'admin' or $this->session->userdata('akses') == 'superadmin' ) {





            $id_menu = $this->input->post('id_menu');
            $id_bahan_baku = $this->input->post('id_bahan_baku');
            $jumlah_kebutuhan = $this->input->post('jumlah_kebutuhan');
            echo $id_menu;

            $data = array();
            $index = 0;
            foreach ($id_bahan_baku as $i) { // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_menu' => $id_menu,
                    'id_bahan_baku' => $id_bahan_baku[$index],
                    'jumlah_kebutuhan' => $jumlah_kebutuhan[$index],  // Ambil dan set data nama sesuai index array dari $index

                ));

                $index++;
            }
            $sql = $this->Datakomposisi_Model->Simpanbanyak($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)








            $this->session->set_flashdata('flash', '3');


            redirect('Inputkomposisi');
        } else {
            redirect('Home/logout', 'refresh');
        }
    }

    
}

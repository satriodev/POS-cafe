<?php


class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    //$this->load->model('DataPenduduk_Model');
    $this->load->helper('url');
  }



  public function AksiLogin()
  {

    $this->load->model('Login_model');
    $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

    $cek_user = $this->Login_model->auth_user($username, $password);

    if ($cek_user->num_rows() == 1) { //jika login sebagai dukcapil


      foreach ($cek_user->result() as $data) {
        // echo var_dump($data);
        $user_data = array(
          'akses' => $data->akses,
          'id_pegawai' => $data->id_pegawai,
          'nama' => $data->nama,
          'qrcode' => $data->qrcode,
          'id_tim' => $data->id_tim
        );
        $this->session->set_userdata($user_data);
      }
      // $data=$cek_user->row_array();
      if ($this->session->userdata('akses') == 'admin' || 'superadmin') {
        // echo var_dump($data);
        redirect('Home/Dashboard');
      } else if ($this->session->userdata('akses') == 'timleader') {
        // echo var_dump($data);
        redirect('Home/Dashboard');
      } else {

        //echo var_dump($data);
        redirect('Home');
      }
    }

    if ($cek_user->num_rows() == 0) {

      redirect('Home');
    }
  }


  function logout()
  {
    session_destroy();

    redirect('Home');
  }

  public function index()
  {
    // if($this->session->userdata('akses')=='1'):
    /* $data['judul'] = 'Halaman Home';
        
        $this->load->view('template/Header', $data);
        $this->load->view('Home', $data);
        $this->load->view('template/Footer');*/
    // endif;
    $this->load->view('V_Login');

    // $this->load->view('template/Header');
    //$this->load->view('Home');
    //$this->load->view('template/Footer');

  }
  public function Dashboard()
  {


    if ($this->session->userdata('akses') == null) {
      redirect('Home/logout', 'refresh');
    } else {
      // if($this->session->userdata('akses')=='1'):

      //echo  var_dump( $this->session->userdata());
      $this->load->view('template/Header');
      $this->load->view('Home');
      $this->load->view('template/Footer');
      // endif;

    }
  }
}
